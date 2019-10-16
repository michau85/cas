<?php

namespace huetm\paczka;;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use huetm\paczka\Car;

class PaczkaController extends Controller
{
    public function paczka(){
        $cars=Car::all();
        $zm=config('cars.zm');
        return view('area::widok',['cars'=>$cars,'zm'=>$zm]);
    }
}
