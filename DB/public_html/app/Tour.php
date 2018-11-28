<?php

namespace App;

use App\Http\Filters\HasFilters;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFilters;

    public $timestamps = false;

    protected $table = 'tours';

    protected $fillable = [
        'name',
        'name_link',
        'seo_title',
        'seo_description',
        'seo_keyword',
        'photo',
        'photo_map',
        'slide',
        'price',
        'duration',
        'route',
        'country',
        'discount',
        'description',
        'highlight',
        'detail',
        'include',
        'policy',
        'photo_e',
        'video_link',
        'map_point',
        'experience',
        'departure',
        'departure_date',
        'file',
        'tags',
        'or_home',
        'or_destination',
        'or_group',
        'p_id',
        'totalreview',
        'totalrate',
        'old',
        'total_like',
        'not_ok',
        'review',
    ];


    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_tours', 't_id', 'g_id');
    }

    public function getLinkAttribute()
    {
        return route('tours.show', [
            'name_link' => $this->getAttribute('name_link')
        ]);
    }
}