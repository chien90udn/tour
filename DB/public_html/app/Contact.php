<?php

namespace App;

use App\Http\Filters\HasFilters;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFilters;

    public $timestamps = false;

    protected $table = 'contact';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'country',
        'subject',
        'info',
        'please',
        'ctype',
        'date_send',
        'url',
        'ip_client',
        'gmt'
    ];

    protected $dates = [
        'date_send',
    ];
}