<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\State

class RentProperty extends Model
{
    public function state()
    {
        return $this->belongsTo('App\State', 'state_id');
    }

    public function town()
    {
        return $this->belongsTo('App\City', 'town_id');
    }
}
