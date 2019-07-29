<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class AjaxController extends Controller
{
    public function getCity($id)
    {
        $cities = City::where('state_id', $id)->get();
        return response()->json(['cities' => $cities]);
    }
}
