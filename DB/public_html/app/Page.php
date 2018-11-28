<?php

namespace App;
use App\Http\Filters\HasFilters;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFilters;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'name_link',
        'content',
        'footerLocation',
        'sortBy'
    ];

    public function getLinkAttribute()
    {
        return route('location.show', [
            'name_link' => $this->getAttribute('name_link')
        ]);
    }
}