<?php

namespace App;

use App\Http\Filters\HasFilters;
use Illuminate\Database\Eloquent\Model;

class CruisesCategory extends Model
{
    use HasFilters;

    public $timestamps = false;

    protected $table = 'cat_cruises';

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
        return $this->belongsTo(CruisesCategory::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(CruisesCategory::class, 'parent_id');
    }

    public function cruises()
    {
        return $this->hasMany(Cruises::class, 'cat_id');
    }
}