@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADMS') }}</div>

                <div class="card-body">
                    <form method="POST" action="/search-flights">
                        @csrf

                        <div class ="row mb-12">
                            <div class="col-md-12">
                            <label for="two_way" class="col-form-label">{{ __('Return Flights') }}</label>
                                <input type="checkbox" class="@error('two_way') is-invalid @enderror" name="two_way" value="true" checked>
                            </label>
                            </div>
                        </div>
                        <br/>
                        <div class="row mb-12">

                            <div class="col-md-3">
                                <label for="from" class="col-form-label">{{ __('From') }}</label>
                                <input id="from" type="text" class="form-control @error('from') is-invalid @enderror" name="from" value="{{ old('from') }}" required autocomplete="from" autofocus>

                                @error('from')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="to" class="col-form-label">{{ __('To') }}</label>
                                <input id="to" type="text" class="form-control @error('to') is-invalid @enderror" name="to" value="{{ old('to') }}" required autocomplete="to">

                                @error('to')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="departure" class="col-form-label">{{ __('Departure') }}</label>
                                <input id="departure" type="date" class="form-control @error('departure') is-invalid @enderror" name="departure" required autocomplete="departure">

                                @error('departure')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="return" class="col-form-label">{{ __('Return') }}</label>
                                <input id="return" type="date" class="form-control" name="return" required autocomplete="return">
                            </div>
                        </div>

                        <br/>
                        <br/>
                        <div class="row mb-12">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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
