<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qualification;
use App\Driver;
use App\Vehicle;
use App\Agency;

class QualificationController extends Controller
{

    public function index()
    {
      $qualifications = Qualification::all();
      $drivers = Driver::all();
      $vehicles = Vehicle::all();
      $agencies = Agency::all();

      return view('qualify.index', compact('qualifications', 'drivers', 'vehicles', 'agencies'));
    }

    public function store(Request $request)
    {
      $vehicle = Vehicle::find($request->vehicle_id);

      $qualify = new Qualification;
      $qualify->agency_id = $request->agency_id;
      $qualify->vehicle_id = $request->vehicle_id;
      $qualify->owner_id = $vehicle->owner_id;
      $qualify->driver_id = $request->driver_id;
      $qualify->credentialn = $request->credentialn;
      $qualify->name = $request->name;
      $qualify->expedient = $request->expedient;
      $qualify->ini_date = $request->ini_date;
      $qualify->expiration = $request->expiration;
      $qualify->wafers = $request->wafers;
      $qualify->save();

      return redirect('/qualifications')->with('messageToast','Habilitación creada correctamente.');
    }

    public function show(Qualification $qualify)
    {
      return view('qualify.show', compact('qualify'));
    }

    public function extend(Request $request, Qualification $qualify)
    {
      $qualify->expiration = $request->expiration;
      $qualify->save();
      return redirect('/home')->with('messageToast','Habilitación extendida correctamente.');

    }

    public function generateQR(Qualification $qualify)
    {
      \QrCode::size(500)->format('png')->generate($qualify->id, public_path('images/'.$qualify->id.$qualify->name.'qrcode.png'));
      return redirect('qr/'.$qualify->id);
    }

    public function showQR(Qualification $qualify)
    {
      return view('qualify.qr', compact('qualify'));
    }
}
