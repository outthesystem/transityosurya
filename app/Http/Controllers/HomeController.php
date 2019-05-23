<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qualification;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $qualifications = Qualification::all();

      return view('home', compact('qualifications'));
    }
}
