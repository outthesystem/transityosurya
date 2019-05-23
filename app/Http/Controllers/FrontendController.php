<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qualification;
use App\Agency;

class FrontendController extends Controller
{
    public function index()
    {
      return view('frontend.index');
    }


    public function result(Qualification $qualify)
    {
      return view('frontend.result', compact('qualify'));
    }

    public function resultAgency(Agency $agency)
    {
      return view('frontend.resultagency', compact('agency'));
    }
}
