<?php

namespace App;

use App\Http\Filters\HasFilters;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFilters;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'vietnams';

    protected $fillable = [
        'name', 
        'name_link',
        'photo',
        'photo_e',
        'description',
        'detail',
        'tags',
        'type',
        'date_set',
        'helpful',
        'cat_id',
        'date_show',
    ];

    public $timestamps = false;

    public function categories()
    {
        return $this->belongsTo(PostCategory::class, 'cat_id', 'id');
    }

    public function getLinkAttribute()
    {
        return route('post.show', [
            'name_link' => $this->getAttribute('name_link')
        ]);
    }

}
