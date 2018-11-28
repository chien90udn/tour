<?php

namespace App;

use App\Http\Filters\HasFilters;
use Illuminate\Database\Eloquent\Model;

class Customized extends Model
{
    use HasFilters;

    protected $table = 'customized';

    protected $fillable = [
        'content',
    ];

    protected $casts = [
        'content' => 'array',
    ];
}