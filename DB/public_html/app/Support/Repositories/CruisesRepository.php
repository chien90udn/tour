<?php

namespace App\Support\Repositories;

use App\Cruises;
use App\CruisesCategory;

class CruisesRepository
{
    protected $cruises;

    public function __construct(Cruises $cruises)
    {
        $this->cruises = $cruises;
    }

    public function query()
    {
        return $this->cruises->query();
    }

    public function getViaSlug($slug)
    {
        $cruises = $this->cruises->where([
            ['name_link', '=', $slug]
        ])->firstOrFail();

        return $cruises;
    }

    public function getCruises(
        $limit = 10,
        $location = 0,
        $onlyShowPublished = true,
        $orderBy = 'latest'
    )
    {
        $query = $this->cruises->query();

        if ($location) {
            $query = $query->where('location',$location);
        }

        switch ($orderBy) {
            case 'latest':
                $query = $query->orderBy('id','desc');
                break;
            case 'oldest':
                $query = $query->oldest();
                break;
            case 'featured':
                $query = $query->orderBy('featured', 'desc')->latest();
                break;
        }

        return $query->limit($limit)->get();
    }

    public function getCruisesViaCategoires(CruisesCategory $cruisesCategory, $perPage = 10, $onlyPublished = false)
    {
        $query = $cruisesCategory->cruises();

        $query = $query->orderBy('id', 'desc');

        return $perPage ? $query->paginate($perPage) : $query->get();
    }

    public function getListCruises(
        $limit = 10,
        $category_id = 0,
        $onlyShowPublished = true,
        $orderBy = 'latest'
    )
    {
        $query = $this->cruises->query();

        if ($category_id) {
            $query = $query->where('cat_id',$category_id);
        }

        switch ($orderBy) {
            case 'latest':
                $query = $query->orderBy('id','desc');
                break;
            case 'oldest':
                $query = $query->oldest();
                break;
            case 'featured':
                $query = $query->orderBy('featured', 'desc')->latest();
                break;
        }

        return $query->paginate($limit);
    }

    public function search($request, $onlyPublished = false, $limit = 10, $paginate = 0)
    {
        if($request->has('q')) {
            $keyword = '%' . $request->get('q') . '%';
            $posts = $this->cruises->where(function ($query) use ($keyword) {
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