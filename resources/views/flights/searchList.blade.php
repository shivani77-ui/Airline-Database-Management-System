@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Search Flights - Departures') }}</div>

                <div class="card-body">
                    <form action="/flights">
                    @csrf
                    <button class="primary">Book</button>
                    </form>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Airline</th>
                        <th scope="col">Flight</th>
                        <th scope="col">Model</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($flights[0] as $index => $depart) 
                        <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td>{{$depart->airline}}</td>
                        <td>{{$depart->flight_number}}</td>
                        <td>{{$depart->model}}</td>
                        <td><button class="primary"><a href="/book-flight">Book</a></button></td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>


            <div class="card">
                <div class="card-header">{{ __('Search Flights - Arrivals') }}</div>

                <div class="card-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Airline</th>
                        <th scope="col">Flight</th>
                        <th scope="col">Model</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                
                    @foreach($flights[1] as $index => $depart) 
                        <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td>{{$depart->airline}}</td>
                        <td>{{$depart->flight_number}}</td>
                        <td>{{$depart->model}}</td>
                        <td><button class="primary"><a href="/book-flight">Book</a></button></td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
