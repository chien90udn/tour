<?php

namespace App;

use App\Http\Filters\HasFilters;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFilters;

    public $timestamps = false;

    protected $table = 'google_map';

    protected $fillable = [
        'name',
        'desc',
        'fact',
        'detail',
        'months',
        'months_good',
        'photo',
        'photo_e',
        'link',
        'gx',
        'gy',
        'bg',
        'parent_id',
        'home',
        'date_set',
        'country',
    ];

    protected $casts = [
        'home' => 'boolean',
    ];

    public function getLinkAttribute()
    {
        return route('location.show', str_replace(' ','-',$this->name));
    }

}