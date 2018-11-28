<?php

namespace App\Support\Repositories;

use App\PostCategory;

class PostCategoryRepository
{
    protected $category;

    public function __construct(PostCategory $category)
    {
        $this->category = $category;
    }

    public function query()
    {
        return $this->category->query();
    }

    public function getViaSlug($slug, $onlyPublished = false)
    {
        $category = $this->category->where([
            ['name_link', '=', $slug]
        ]);

        $category = $category->firstOrFail();

        return $category;
    }

    public function getCategories($parent_id = 0, $onlyShowPublished = true, $locale = null)
    {
        $query = $this->category->where('published',  true);
        $locale = $locale ? $locale : session('lang');
        return $query->get();
    }
}