<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destination = Destination::all()->groupBy('country');

        return view('home', compact('destination'));
    }

    public function v1()
    {
        return view('v1');
    }
}
