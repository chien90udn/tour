<?php

namespace App\Support\Repositories;

use App\Hotel;
use App\HotelCategory;
use Carbon\Carbon;

class HotelRepository
{
    protected $hotel;

    public function __construct(Hotel $hotel)
    {
        $this->hotel = $hotel;
    }

    public function query()
    {
        return $this->hotel->query();
    }

    public function getViaSlug($slug)
    {
        $hotel = $this->hotel->where([
            ['name_link', '=', $slug]
        ])->firstOrFail();

        return $hotel;
    }

    public function getHotels(
        $limit = 10,
        $location = 0,
        $onlyShowPublished = true,
        $orderBy = 'latest'
    )
    {
        $query = $this->hotel->query();

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

    public function getHotelsViaCategoires(HotelCategory $hotelCategory, $perPage = 10, $onlyPublished = false)
    {
        $query = $hotelCategory->hotels();

        $query = $query->orderBy('id', 'desc');

        return $perPage ? $query->paginate($perPage) : $query->get();
    }

    public function getHotelsViaDestination($localtion, $perPage = 10, $onlyPublished = false)
    {
        // dd($localtion);
        $query = $this->hotel->query();
        
        $query = $query->whereIn('location',$localtion);

        $query = $query->orderBy('id', 'desc');

        return $perPage ? $query->paginate($perPage) : $query->get();
    }

    public function getListHotels(
        $limit = 10,
        $category_id = 0,
        $onlyShowPublished = true,
        $orderBy = 'latest'
    )
    {
        $query = $this->hotel->query();

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
            $posts = $this->hotel->where(function ($query) use ($keyword) {
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