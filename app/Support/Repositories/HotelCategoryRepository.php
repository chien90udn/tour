<?php

namespace App\Support\Repositories;

use App\HotelCategory;

class HotelCategoryRepository
{
    protected $hotelCategory;

    public function __construct(HotelCategory $hotelCategory)
    {
        $this->hotelCategory = $hotelCategory;
    }

    public function query()
    {
        return $this->hotelCategory->query();
    }

    public function getViaSlug($slug, $onlyPublished = false)
    {
        $hotelCategory = $this->hotelCategory->where([
            ['name_link', '=', $slug]
        ]);
        $hotelCategory = $hotelCategory->firstOrFail();
        return $hotelCategory;
    }

    public function getCategories($parent_id = 0, $onlyShowPublished = true, $locale = null)
    {
        $query = $this->hotelCategory->where('published',  true);
        $locale = $locale ? $locale : session('lang');
        return $query->get();
    }
}