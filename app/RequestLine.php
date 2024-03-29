<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestLine extends Model
{
    public function rentProperty()
    {
        return $this->belongsTo('App\RentProperty', 'request_id');
    }

    // Show price of product in a specific way
    public function formatValue($value)
    {
        return number_format($value);
    }
}
