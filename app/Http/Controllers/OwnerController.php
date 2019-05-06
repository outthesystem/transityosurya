<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class OwnerController extends Controller
{
  public function index()
  {
    $owners = Owner::all();

    return view('owner.index', compact('owners'));
  }

  public function store(Request $request)
  {
    $owner = new Owner;
    $owner->name = $request->name;
    $owner->dni = $request->dni;
    $owner->phone = $request->phone;
    $owner->save();

    return redirect('/owners')->with('messageToast','Propietario creado correctamente.');
  }

  public function edit(Owner $owner)
  {
    return view('owner.edit', compact('owner'));
  }

  public function update(Request $request, Owner $owner)
  {
    $owner->name = $request->name;
    $owner->dni = $request->dni;
    $owner->phone = $request->phone;
    $owner->save();

    return redirect('/owners')->with('messageToast','Propietario editado correctamente.');
  }

  public function destroy(Owner $owner)
  {
    $owner->delete();

    return redirect('/owners')->with('messageToast','Propietario eliminado correctamente.');
  }
}
