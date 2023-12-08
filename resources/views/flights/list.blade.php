@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Flights') }}</div>
                <br/>

                <div scope="col"><button class="btn-primary"><a href="/create-flight">Create</a></button></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Flight Number</th>
                        <th scope="col">Model</th>
                        <th scope="col">Airline</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($flights as $flight) 
                        <tr>
                        <th scope="row">{{ $flight->id }}</th>
                        <td>{{ $flight->flight_number }}</td>
                        <td>{{ $flight->model }}</td>
                        <td>{{ $flight->airline }}</td>
                        <td><button class="primary"><a href="/edit-flight/{{ $flight->id }}">Edit</a></button></td>
                        <td><button class="primary"><a href="/delete-flight/{{ $flight->id }}">Delete</a></button></td>
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
