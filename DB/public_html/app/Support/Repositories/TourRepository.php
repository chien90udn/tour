<?php

namespace App\Support\Repositories;

use App\Tour;
use App\Group;
use Carbon\Carbon;

class TourRepository
{
    protected $tours;

    public function __construct(Tour $tour)
    {
        $this->tours = $tour;
    }

    public function query()
    {
        return $this->tours->query();
    }

    public function getViaSlug($slug)
    {
        $tour = $this->tours->where([
            ['name_link', '=', $slug]
        ])->firstOrFail();

        return $tour;
    }

    public function getTours(
        $limit = 10,
        $category_id = 0,
        $onlyShowPublished = true,
        $orderBy = 'latest'
    )
    {
        $query = $this->tours->query();

        if ($category_id) {
            $query = $query->whereHas('groups', function ($q) use($category_id) {
                if(is_array($category_id)) {
                    $q->whereIn('id', $category_id);
                } else {
                    $q->where('id', $category_id);
                }
            });
        }

        switch ($orderBy) {
            case 'latest':
                $query = $query->orderBy('id','desc');
                break;
            case 'oldest':
                $query = $query->oldest();
                break;
            case 'featured':
                $query = $query->orderBy('or_home', true)->orderBy('id','desc');
                break;
        }

        return $query->limit($limit)->get();
    }

    public function getTourViaCategoires(Group $group, $perPage = 10, $onlyPublished = false)
    {
        $query = $group->tours();

        $query = $query->orderBy('id', 'desc');

        return $perPage ? $query->paginate($perPage) : $query->get();
    }

    public function search($request, $onlyPublished = false, $limit = 10, $paginate = 0)
    {
        if($request->has('q')) {
            $keyword = '%' . $request->get('q') . '%';
            $posts = $this->tours->where(function ($query) use ($keyword) {
                $query->orWhere('name', 'like', $keyword);
                $query->orWhere('route', 'like', $keyword);
            });
        }
        if($request->has('cate')){
            $category = $request->get('cate');
            $category = is_array($category) ? $category : explode(',', $category);
            $posts->whereHas('groups', function ($query) use ($category) {
                $query->whereIn('id', $category);
            });
        }
        if($request->has('tourday')){
            $day = $request->get('tourday');
            $posts->where(function ($query) use ($day) {
                $query->where('duration', $day);
            });
        }
        return $limit > 0  ? $posts->limit($limit)->get() :
            ($paginate > 0 ? $posts->paginate($paginate) : $posts->get());
    }
}