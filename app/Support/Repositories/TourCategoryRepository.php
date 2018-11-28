<?php

namespace App\Support\Repositories;

use App\Group;

class TourCategoryRepository
{
    protected $group;

    public function __construct(Group $group)
    {
        $this->group = $group;
    }

    public function query()
    {
        return $this->group->query();
    }

    public function getViaSlug($slug, $onlyPublished = false)
    {
        $group = $this->group->where([
            ['name_link', '=', $slug]
        ]);
        $group = $group->firstOrFail();
        return $group;
    }

    public function getCategories($parent_id = 0, $onlyShowPublished = true, $locale = null)
    {
        $query = $this->group->where('published',  true);
        $locale = $locale ? $locale : session('lang');
        return $query->get();
    }
}