<?php

namespace App\Http\Filters;

class PostCategoryFilters extends Filters
{
    protected $orderable = [
        'name', 'status', 'created_at',
    ];
    protected $searchable = [
        'name',
    ];
}