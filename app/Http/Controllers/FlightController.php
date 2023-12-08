<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Airline;
use DB;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $flights = Flight::all();
        $result = array();
        foreach($flights as $flight){
            $obj = new \stdClass();
            $obj->id = $flight->id;
            $obj->flight_number = $flight->flight_number;
            $obj->model = $flight->model;
            $obj->airline = Airline::find($flight->airline_id)->name;
            array_push($result, $obj);
        }
	    return view('flights.list')->with(array('flights' => $result));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $airlines = Airline::all();
        return view('flights.create')->with(array('airlines'=>$airlines));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $flight = new Flight;
        $flight->flight_number = $request->flight_number;
        $flight->model = $request->model;
        $flight->airline_id = $request->airline;
        $flight->save();
        return redirect('/flights')->with('status','Flight saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $flight = Flight::find($id);
        $obj = new \stdClass();
        $obj->id = $flight->id;
        $obj->flight_number = $flight->flight_number;
        $obj->model = $flight->model;
        $obj->airline = Airline::find($flight->airline_id)->name;
        $obj->airline_id = $flight->airline_id;
        $airlines = Airline::all();
	    return view('flights.edit')->with(array('flight' => $obj))->with(array('airlines'=>$airlines));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $flight = Flight::find($id);
        $flight->flight_number = $request->flight_number;
        $flight->model = $request->model;
        $flight->airline_id = $request->airline;
        $flight->save();
        return redirect('/flights')->with('status','Flight updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('flights')->where('id','=',$id)->delete();
        //$airline->delete();
        return redirect('flights')->with('status', 'Successfully deleted the flight!');
    }
}
