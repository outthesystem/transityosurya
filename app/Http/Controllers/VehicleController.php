<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\Owner;

class VehicleController extends Controller
{
  public function index()
  {
    $vehicles = Vehicle::all();
    $owners = Owner::all();
    return view('vehicle.index', compact('vehicles', 'owners'));
  }

  public function store(Request $request)
  {
    $vehicle = new Vehicle;
    $vehicle->owner_id = $request->owner_id;
    $vehicle->brand = $request->brand;
    $vehicle->model = $request->model;
    $vehicle->year = $request->year;
    $vehicle->patent = $request->patent;
    $vehicle->save();

    return redirect('/vehicles')->with('messageToast','Vehiculo creado correctamente.');
  }

  public function edit(Vehicle $vehicle)
  {
    $owners = Owner::all();
    return view('vehicle.edit', compact('vehicle', 'owners'));
  }

  public function update(Request $request, Vehicle $vehicle)
  {
    $vehicle->owner_id = $request->owner_id;
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
