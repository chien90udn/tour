<?php
namespace App;

use App\Http\Filters\HasFilters;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFilters;

    protected $with = [
        'items'
    ];

    protected $fillable = [
        'slug',
    ];

    public function items()
    {
        return $this->hasMany(MenuItem::class);
    }

    public function getNameOnLogsAttribute($value)
    {
        return $this->slug;
    }
}