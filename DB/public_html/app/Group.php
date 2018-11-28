<?php

namespace App;

use App\Http\Filters\HasFilters;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFilters;

    public $timestamps = false;

    protected $table = 'groups';

    protected $fillable = [
        'name',
        'name_link',
        'seo_title',
        'seo_description',
        'seo_keyword',
        'detail',
        'parent_id',
        'tags',
        'rcount',
        'rorder',
        'show',
        'bg',
        'country',
        'iti',
    ];

    protected $casts = [
        'iti' => 'boolean',
    ];

    public function parent()
    {
        return $this->belongsTo(Group::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(Group::class, 'parent_id');
    }

    public function tours()
    {
        return $this->belongsToMany(Tour::class, 'group_tours', 'g_id', 't_id');
    }

    public function getAll()
    {
        return (new static)->get();
    }

    public function getLinkAttribute()
    {
        return route('group.show', [
            'name_link' => $this->getAttribute('name_link')
        ]);
    }
}