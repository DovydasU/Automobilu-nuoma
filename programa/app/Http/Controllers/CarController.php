<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car_list = Car::all();
        return view('car', compact("car_list"));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function prices()
    {
        $car_list = Car::all();
        return view('prices', compact("car_list"));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function table()
    {
        $car_list = Car::all();
        return view('table', compact("car_list"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'price'  => 'required',
            'mileage'  => 'required',
            'transmission'  => 'required',
            'seats'  => 'required',
            'luggage'  => 'required',
            'petrol'  => 'required',
            'description'  => 'required'
        ]);

        Car::create($request->post());

        return redirect()->route('table')->with('success', 'Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('car-single', compact("car"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('edit',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'price'  => 'required',
            'mileage'  => 'required',
            'transmission'  => 'required',
            'seats'  => 'required',
            'luggage'  => 'required',
            'petrol'  => 'required',
            'description'  => 'required'
        ]);

        $car->fill($request->post())->save();

        return redirect()->route('table')->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('table')->with('success','Company has been deleted successfully');
    }
}
