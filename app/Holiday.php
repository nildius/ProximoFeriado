<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    protected $dates = ['date'];


    public function scopeLapse($query, $start, $end)
    {
        return $query->where('date', '>=', $start)->where('date', '<=', $end);
    }

    public function scopeCountry($query, $country)
    {
        return $query->where('country', '=', $country);
    }

    public function scopeNextholiday($query, $date)
    {
        return $query->where('date', '>', $date);
    }

}


