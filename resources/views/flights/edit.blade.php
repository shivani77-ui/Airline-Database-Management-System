@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Flight') }}</div>

                <div class="card-body">
                    <form method="POST" action="/update-flight/{{ $flight->id }}">
                        @csrf

                        <div class="row mb-12">

                            <div class="col-md-6">
                                <label for="flight_number" class="col-form-label">{{ __('Flight Number') }}</label>
                                <input id="flight_number" type="text" class="form-control @error('from') is-invalid @enderror" name="flight_number" value="{{ $flight->flight_number }}" required autocomplete="flight_number" autofocus>

                                @error('flight_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="model" class="col-form-label">{{ __('Model') }}</label>
                                <input id="model" type="text" class="form-control @error('to') is-invalid @enderror" name="model" value="{{ $flight->model }}" required autocomplete="model">

                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>
                        <br />
                        <div class="row mb-12">
                            <div class="col-md-6">
                                <select class="form-control" name="airline" id="airline">
                                    <option value="{{$flight->airline_id}}">{{ $flight->airline }}</option>
                                    @foreach($airlines as $airline)
                                    <option value="{{$airline->id}}">{{$airline->name}}</option>
                                    @endforeach
                                </select>
                                @error('airline')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <div class="row mb-4">
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                            <div class="col-md-2">
                                <button type="cancel" class="btn btn-danger" onClick="/flights">
                                    {{ __('Cancel') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
