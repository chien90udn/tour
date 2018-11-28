<?php

namespace App\Http\Filters;

class NameFilters extends Filters
{
    protected $orderable = [
        'name',
    ];
    protected $searchable = [
        'name',
    ];
}