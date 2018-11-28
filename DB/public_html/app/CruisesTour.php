<?php

namespace App;

use App\Http\Filters\HasFilters;
use Illuminate\Database\Eloquent\Model;

class CruisesTour extends Model
{
    use HasFilters;

    public $timestamps = false;

    protected $table = 'cruises_tours';

    protected $fillable = [
        'name',
        'name_link',
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


    public function cruises()
    {
        return $this->belongsToMany(Cruises::class, 'cruises_tours_category', 't_id', 'c_id');
    }
}