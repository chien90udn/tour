<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'name',
        'value',
        'autoload',
        'is_array'
    ];

    protected $casts = [
        'autoload' => 'boolean',
        'is_array' => 'boolean',
    ];

    public function setValueAttribute($value)
    {
        if (is_array($value)) {
            $this->attributes['value'] = json_encode($value);
            $this->attributes['is_array'] = true;
        } else {
            $this->attributes['value'] = $value;
        }

    }

    public function getValueAttribute()
    {
        $value = $this->attributes['value'];

        if ($this->getAttribute('is_array')) {
            return json_decode($value, true);
        }

        return $value;
    }
}
