<?php

namespace App;

use App\Http\Filters\HasFilters;
use Illuminate\Database\Eloquent\Model;

class HotelCategory extends Model
{
    use HasFilters;

    public $timestamps = false;

    protected $table = 'cat_hotels';

    protected $fillable = [
        'name',
        'name_link',
        'tags',
        'rcount',
        'type',
        'parent_id',
        'rorder',
        'map_point',
        'zoom'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(HotelCategory::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(HotelCategory::class, 'parent_id');
    }

    // public function hotels()
    // {
    //     return $this->hasMany(Hotel::class, 'cat_id');
    // }

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'hotel_categories', 'cat_id', 'hotel_id');
    }
}