<?php

namespace App\Http\Filters;

class PostFilters extends Filters
{
    protected $orderable = [
        'name', 'status', 'created_at',
    ];
    protected $searchable = [
        'name',
    ];
}