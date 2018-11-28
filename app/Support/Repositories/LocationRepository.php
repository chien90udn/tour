<?php

namespace App\Support\Repositories;

use App\Destination;
use App\Tour;

class LocationRepository
{
    protected $location;
    protected $tour;

    public function __construct(Destination $destination, Tour $tour)
    {
        $this->location = $destination;
        $this->tour = $tour;
    }

    public function query()
    {
        return $this->location->query();
    }

    public function getViaSlug($slug)
    {
        $tour = $this->location->where([
            ['name', '=', ucfirst(mysql_escape($slug))]
        ])->first();

        return $tour;
    }

    public function getTours(
        $limit = 10,
        $category_id = 0,
        $onlyShowPublished = true,
        $orderBy = 'latest'
    )
    {
        $query = $this->location->query();

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
                $query = $query->orderBy('featured', 'desc')->latest();
                break;
        }

        return $query->limit($limit)->get();
    }

    public function getTourViaCategoires(Group $group, $perPage = 10, $onlyPublished = false)
    {
        $query = $group->location();

        $query = $query->orderBy('id', 'desc');

        return $perPage ? $query->paginate($perPage) : $query->get();
    }

    public function searchDestinations($keyword, $limit = 10)
    {
        $keyword = '%' . $keyword . '%';
        $locations = $this->tour->where(function ($query) use ($keyword) {
            $query->orWhere('route', 'like', $keyword);
        });

        return $locations->limit($limit)->get();
    }

    public function getAllDes($country, $perPage)
    {
        $destinations = $this->location->where(function ($query) use ($country) {
            $query->orWhere('country', '=', ucfirst($country));
        })->orderBy('name','asc');

        return $perPage > 0 ? $destinations->paginate($perPage) : $destinations->get();
    }
}