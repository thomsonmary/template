<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Province;

class LocationController extends Controller
{
    public function getCities($province_id)
    {
        $cities = City::where('province_id', $province_id)->get();
        // dd($cities);
        return response()->json($cities);

        

    }
}
