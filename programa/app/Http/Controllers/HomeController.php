<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $service_list = Service::all();
        return view('home', compact("service_list"));
    }
}
