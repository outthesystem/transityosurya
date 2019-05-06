<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;

class DriverController extends Controller
{
    public function index()
    {
      $drivers = Driver::all();

      return view('driver.index', compact('drivers'));
    }

    public function store(Request $request)
    {
      $driver = new Driver;
      $driver->name = $request->name;
      $driver->dni = $request->dni;
      $driver->phone = $request->phone;
      $driver->save();

      return redirect('/drivers')->with('messageToast','Chofer creado correctamente.');
    }

    public function edit(Driver $driver)
    {
      return view('driver.edit', compact('driver'));
    }

    public function update(Request $request, Driver $driver)
    {
      $driver->name = $request->name;
      $driver->dni = $request->dni;
      $driver->phone = $request->phone;
      $driver->save();

      return redirect('/drivers')->with('messageToast','Chofer editado correctamente.');
    }

    public function destroy(Driver $driver)
    {
      $driver->delete();

      return redirect('/drivers')->with('messageToast','Chofer eliminado correctamente.');
    }
}
