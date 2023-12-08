<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airline;
use DB;

class AirlineController extends Controller
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
        $airline = Airline::all();
    
        return view('airlines.list')->with(array('airlines' => $airline));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('airlines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $airline = new Airline;
        $airline->name = $request->name;
        $airline->email = $request->email;
        $airline->save();
        return redirect('/airlines')->with('status','Airline saved successfully');;
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
        $airline = Airline::find($id);
        return view('airlines.edit')->with(array('airline' => $airline));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $airline = Airline::find($id);
        $airline->name = $request->name;
        $airline->email = $request->email;
        $airline->save();
        return redirect('/airlines')->with('status','Airline updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //$airline = Airline::destroy($id);
        //dd($airline);
        DB::table('airlines')->where('id','=',$id)->delete();
        //$airline->delete();
        return redirect('airlines')->with('status', 'Successfully deleted the airline!');
    }
}
