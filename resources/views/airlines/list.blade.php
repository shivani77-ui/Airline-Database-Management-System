@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="card-header">{{ __('Airlines') }}</div>
                <br/>

                <div scope="col"><button class="btn-primary"><a href="/create-airline">Create</a></button></div>
                <div class="card-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Airline</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($airlines as $airline) 
                        <tr>
                        <th scope="row">{{ $airline->id }}</th>
                        <td>{{ $airline->name }}</td>
                        <td>{{ $airline->email }}</td>
                        <td><button class="primary"><a href="/edit-airline/{{ $airline->id }}">Edit</a></button></td>
                        <td><button class="primary"><a href="/delete-airline/{{ $airline->id }}">Delete</a></button></td>
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
