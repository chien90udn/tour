<?php

namespace App;

use App\Http\Filters\HasFilters;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFilters;

    public $timestamps = false;

    protected $table = 'booking_tour';

    protected $fillable = [
        'name',
        'email',
        'alemail',
        'phone',
        'fax',
        'country',
        'date_arr',
        'date_flex',
        'date_de',
        'adult',
        'child',
        'babies',
        'class',
        'tour_id',
        'info',
        'please',
        'iam',
        'promo',
        'rec_mail',
        'date_send',
        'type_group',
        'ip_client'
    ];

    protected $dates = [
        'date_arr',
        'date_de',
        'date_send',
    ];

    public function tours()
    {
        return $this->belongsTo(Tour::class, 'tour_id');
    }

    public function cruise()
    {
        return $this->belongsTo(CruisesTour::class, 'tour_id');
    }
}