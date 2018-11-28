<?php

namespace App;

use App\Http\Filters\HasFilters;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFilters;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'cat_vietnams';

    protected $fillable = [
        'name',
        'name_link',
        'tags',
        'photo',
        'description',
        'rcount',
        'rorder',
    ];

    public $timestamps = false;

    public function posts()
    {
        return $this->belongsTo(Post::class, 'id', 'cat_id');
    }

    public function getParentForSelection()
    {

        $items = (new static)->get()->mapWithKeys(function ($i) {
            return [$i->id => $i->name];
        });

        return $items;
    }

    public function getAll()
    {

        return (new static)->get();
    }

    public function getLinkAttribute()
    {
        return route('post.category.show', [
            'name_link' => $this->getAttribute('name_link')
        ]);
    }
}
