<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Airline;
use App\Models\Flight;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('main');
    }

    public function searchFlights(Request $request)
    {
        $result = array();
        $departureSet = array();
        $arrivalSet = array();
        $twoWay = $request->two_way;
        $routes = DB::table('airline_routes')
                        ->where('source','=', $request->from)
                        ->where('destination','=', $request->to)
                        ->get();
        if($twoWay == true){
        //dd($routes);
            $reqDepartureDate = strtotime($request->departure);
            $reqDDay = date('l', $reqDepartureDate);
            $reqArrivalDate = strtotime($request->arrival);
            $reqADay = date('l', $reqArrivalDate);

            //set departure data set
            foreach($routes as $route){
                $flights = DB::table('flight_availability')
                            //dd($routes);
                            ->where('route_id','=',$route->id)
                            ->get();
                foreach($flights as $flight){
                    $r = new \stdClass();
                    if($reqDDay == 'monday' && $flight['monday'] == true){
                        $r->day = 'monday';
                    }else if($reqDDay == 'tuesday' && $flight['tuesday'] == true){
                        $r->day = 'tuesday';
                    }else if($reqDDay == 'wednesday' && $flight['wednesday'] == true){
                        $r->day = 'wednesday';
                    }else if($reqDDay == 'thursday' && $flight['thursday'] == true){
                        $r->day = 'thursday';
                    }else if($reqDDay == 'friday' && $flight['friday'] == true){
                        $r->day = 'friday';
                    }else if($reqDDay == 'saturday' && $flight['saturday'] == true){
                        $r->day = 'saturday';
                    }else if($reqDDay == 'sunday' && $flight['sunday'] == true){
                        $r->day = 'sunday';
                    }
                    $r->flight_number = Flight::find($flight->flight_id)->flight_number;
                    $r->model = Flight::find($flight->flight_id)->model;
                    $r->airline = Airline::find(Flight::find($flight->flight_id)->airline_id)->name;
                    array_push($departureSet, $r);
                }
            }


            //set arrival data sets
            foreach($routes as $route){
                $flights = DB::table('flight_availability')
                                    ->where('route_id','=',$route->id)
                                    ->get();
                foreach($flights as $flight){
                    $r = new \stdClass();
                    if($reqADay == 'monday' && $flight['monday'] == true){
                        $r->day = 'monday';
                    }else if($reqADay == 'tuesday' && $flight['tuesday'] == true){
                        $r->day = 'tuesday';
                    }else if($reqADay == 'wednesday' && $flight['wednesday'] == true){
                        $r->day = 'wednesday';
                    }else if($reqADay == 'thursday' && $flight['thursday'] == true){
                        $r->day = 'thursday';
                    }else if($reqADay == 'friday' && $flight['friday'] == true){
                        $r->day = 'friday';
                    }else if($reqADay == 'saturday' && $flight['saturday'] == true){
                        $r->day = 'saturday';
                    }else if($reqADay == 'sunday' && $flight['sunday'] == true){
                        $r->day = 'sunday';
                    }
                    $r->flight_number = Flight::find($flight->flight_id)->flight_number;
                    $r->model = Flight::find($flight->flight_id)->model;
                    $r->airline = Airline::find(Flight::find($flight->flight_id)->airline_id)->name;
                    array_push($arrivalSet, $r);
                }
            }


        }else{
            //dd("inside else");
            $reqDepartureDate = strtotime($request->departure);
            $reqDDay = date('l', $reqDepartureDate);
            //print_r("Result");
            //dd($routes);
            foreach($routes as $route){
                $flights = DB::table('flight_availability')
                                    ->where('route_id','=',$route->id)
                                    ->get();
                foreach($flights as $flight){
                    $r = new \stdClass();
                    if($reqDDay == 'monday' && $flight['monday'] == true){
                        $r->day = 'monday';
                    }else if($reqDDay == 'tuesday' && $flight['tuesday'] == true){
                        $r->day = 'tuesday';
                    }else if($reqDDay == 'wednesday' && $flight['wednesday'] == true){
                        $r->day = 'wednesday';
                    }else if($reqDDay == 'thursday' && $flight['thursday'] == true){
                        $r->day = 'thursday';
                    }else if($reqDDay == 'friday' && $flight['friday'] == true){
                        $r->day = 'friday';
                    }else if($reqDDay == 'saturday' && $flight['saturday'] == true){
                        $r->day = 'saturday';
                    }else if($reqDDay == 'sunday' && $flight['sunday'] == true){
                        $r->day = 'sunday';
                    }
                    //$r->flight_number = Flight::find($flight['flight_id'])->flight_number;
                    $r->flight_number = Flight::find($flight->flight_id)->flight_number;
                    $r->model = Flight::find($flight->flight_id)->model;
                    $r->airline = Airline::find(Flight::find($flight->flight_id)->airline_id)->name;
                    array_push($departureSet, $r);
                }
            }
        }
        array_push($result, $departureSet);
        array_push($result, $arrivalSet);
        return view('flights.searchList')->with(array('flights' => $result));
    }
}
