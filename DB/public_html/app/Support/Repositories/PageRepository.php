<?php

namespace App\Support\Repositories;

use App\Page;

class PageRepository
{
    protected $page;

    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    public function query()
    {
        return $this->page->query();
    }

    public function getPageViaSlug($slug, $onlyPublished = false)
    {
        $page = $this->page->where([
            ['name_link', '=', $slug]
        ]);

        $page = $page->firstOrFail();

        return $page;
    }
}