<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function CitiesView(){
        return view('cities.cities_view');

    }
}
