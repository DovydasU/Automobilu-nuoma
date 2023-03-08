<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $service_list = Service::all();
        $car_list = Car::all()->random(7);
        return view('home', compact("service_list", "car_list"));
    }
}
