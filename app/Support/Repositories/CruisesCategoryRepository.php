<?php

namespace App\Support\Repositories;

use App\CruisesCategory;

class CruisesCategoryRepository
{
    protected $cruisesCategory;

    public function __construct(CruisesCategory $cruisesCategory)
    {
        $this->cruisesCategory = $cruisesCategory;
    }

    public function query()
    {
        return $this->cruisesCategory->query();
    }

    public function getViaSlug($slug, $onlyPublished = false)
    {
        $cruisesCategory = $this->cruisesCategory->where([
            ['name_link', '=', $slug]
        ]);
        $cruisesCategory = $cruisesCategory->firstOrFail();
        return $cruisesCategory;
    }

    public function getCategories($parent_id = 0, $onlyShowPublished = true, $locale = null)
    {
        $query = $this->cruisesCategory->where('published',  true);
        $locale = $locale ? $locale : session('lang');
        return $query->get();
    }
}