<?php

namespace App;

use App\Http\Filters\HasFilters;
use Illuminate\Database\Eloquent\Model;

class Cruises extends Model
{
    use HasFilters;

    public $timestamps = false;

    protected $table = 'cruises';

    protected $fillable = [
        'name',
        'name_link',
        'seo_title',
        'seo_description',
        'seo_keyword',
        'type_hotel',
        'number_hotel',
        'location',
        'location',
        'photo',
        'photo_e',
        'slide',
        'grade',
        'our_grade',
        'address',
        'price',
        'discount',
        'trip',
        'description',
        'description1',
        'detail',
        'detail_1',
        'price_e',
        'fac_high',
        'facilities',
        'policy',
        'dining',
        'ourviewpoits',
        'review',
        'meeting_rooms',
        'times_distances',
        'market_segment',
        'point_of_view',
        'website',
        'email',
        'skyper',
        'phone',
        'file_name_1',
        'file_name_2',
        'file_name_3',
        'map_point',
        'tags',
        'type',
        'date_set',
        'cat_id',
        'updatetime',
        'pack_number',
        'active',
        'promotion',
    ];

    protected $casts = [
        'promotion' => 'array'
    ];

    public function tours()
    {
        return $this->belongsToMany(CruisesTour::class, 'cruises_tours_category', 'c_id', 't_id');
    }
}