<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\Owner;
use App\Driver;

class VehicleController extends Controller
{
  public function index()
  {
    $vehicles = Vehicle::all();
    $drivers = Driver::all();
    return view('vehicle.index', compact('vehicles', 'drivers'));
  }

  public function store(Request $request)
  {
    $vehicle = new Vehicle;
    $vehicle->driver_id = $request->driver_id;
    $vehicle->brand = $request->brand;
    $vehicle->model = $request->model;
    $vehicle->year = $request->year;
    $vehicle->patent = $request->patent;
    $vehicle->save();

    return redirect('/vehicles')->with('messageToast','Vehiculo creado correctamente.');
  }

  public function edit(Vehicle $vehicle)
  {
    $drivers = Driver::all();
    return view('vehicle.edit', compact('vehicle', 'drivers'));
  }

  public function update(Request $request, Vehicle $vehicle)
  {
    $vehicle->driver_id = $request->driver_id;
    $vehicle->brand = $request->brand;
    $vehicle->model = $request->model;
    $vehicle->year = $request->year;
    $vehicle->patent = $request->patent;
    $vehicle->save();

    return redirect('/vehicles')->with('messageToast','Vehiculo editado correctamente.');
  }

  public function destroy(Vehicle $vehicle)
  {
    $vehicle->delete();

    return redirect('/vehicles')->with('messageToast','Vehiculo eliminado correctamente.');
  }
}
