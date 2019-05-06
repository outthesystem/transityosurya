<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agency;

class AgencyController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    $agencies = Agency::all();

    return view('agency.index', compact('agencies'));
  }

  public function store(Request $request)
  {
    $agency = new Agency;
    $agency->name = $request->name;
    $agency->address = $request->address;
    $agency->save();

    return redirect('/agencies')->with('messageToast','Agencia creada correctamente.');
  }

  public function edit(Agency $agency)
  {
    return view('agency.edit', compact('agency'));
  }

  public function update(Request $request, Agency $agency)
  {
    $agency->name = $request->name;
    $agency->address = $request->address;
    $agency->save();

    return redirect('/agencies')->with('messageToast','Agencia editada correctamente.');
  }

  public function destroy(Agency $agency)
  {
    $agency->delete();

    return redirect('/agencies')->with('messageToast','Agencia eliminada correctamente.');
  }
}
