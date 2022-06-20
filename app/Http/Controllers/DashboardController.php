<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('dashboard', [
            'user' => auth()->user()
        ]);
    }
    // public function index()
    // {
    //     return "<h1> hai </h1>";
    // }

    public function create()
    {
        //
    }


}
