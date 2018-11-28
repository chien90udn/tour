<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    public $timestamps = false;

    protected $table = 'country';

    protected $fillable = [
        'c_id',
        'location',
    ];
}