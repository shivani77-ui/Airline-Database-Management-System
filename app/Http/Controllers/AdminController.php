<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airline;
use DB;

class AdminController extends Controller
{
    //
    public function index()
    {
        $airline = Airline::all();
    
        return view('airlines.list')->with(array('airlines' => $airline));

    }
}
