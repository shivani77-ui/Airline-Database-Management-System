@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Card Details') }}</div>

                <div class="card-body">
                    <form action="/book-ticket">
                        @csrf

                        <div class="row mb-12">

                            <div class="col-md-6">
                                <label for="card" class="col-form-label">{{ __('Card Number') }}</label>
                                <input id="card" type="number" class="form-control @error('card') is-invalid @enderror" name="card" value="{{ old('card') }}" required autocomplete="card">

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
                                <label for="name" class="col-form-label">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="expiry" class="col-form-label">{{ __('Valid Till') }}</label>
                                <input id="expiry" type="text" class="form-control @error('expiry') is-invalid @enderror" name="expiry" value="{{ old('expiry') }}" required autocomplete="expiry">

                                @error('expiry')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>
                        <br />
                        <div class="row mb-12">
                            <div class="col-md-12">
                                <label for="cvv" class="col-form-label">{{ __('cvv/pin') }}</label>
                                <input id="cvv" type="text" class="form-control @error('cvv') is-invalid @enderror" name="cvv" value="{{ old('cvv') }}" required autocomplete="cvv">

                                @error('cvv')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div>
                        </div>
                        <br/>
                        <br/>
                        <div class="row mb-12">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Book Ticket') }}
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
