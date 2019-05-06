<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qualification;

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
}
