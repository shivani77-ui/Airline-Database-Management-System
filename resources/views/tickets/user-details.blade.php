@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Fill User Details') }}</div>

                <div class="card-body">
                    <form action="/card-details">
                        @csrf

                        <div class="row mb-12">
                            <div class="col-md-6">
                                <label for="name1" class="col-form-label">{{ __('Name') }}</label>
                                <input id="name1" type="text" class="form-control @error('from') is-invalid @enderror" name="name1" value="{{ old('name1') }}" required autocomplete="name1" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="email1" class="col-form-label">{{ __('Email') }}</label>
                                <input id="email1" type="text" class="form-control @error('to') is-invalid @enderror" name="email1" value="{{ old('email1') }}" autocomplete="email1">

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
                                <label for="name2" class="col-form-label">{{ __('Name') }}</label>
                                <input id="name2" type="text" class="form-control @error('name2') is-invalid @enderror" name="name2" value="{{ old('name2') }}" autocomplete="name2" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="email2" class="col-form-label">{{ __('Email') }}</label>
                                <input id="email2" type="text" class="form-control @error('email2') is-invalid @enderror" name="email2" value="{{ old('email2') }}" autocomplete="email2">

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
                                <label for="name3" class="col-form-label">{{ __('Name') }}</label>
                                <input id="name3" type="text" class="form-control @error('name3') is-invalid @enderror" name="name3" value="{{ old('name3') }}" autocomplete="name3" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="email3" class="col-form-label">{{ __('Email') }}</label>
                                <input id="email3" type="text" class="form-control @error('email3') is-invalid @enderror" name="email3" value="{{ old('email3') }}" autocomplete="email3">

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
                                <label for="name4" class="col-form-label">{{ __('Name') }}</label>
                                <input id="name4" type="text" class="form-control @error('name4') is-invalid @enderror" name="name4" value="{{ old('name4') }}" autocomplete="name4" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="email4" class="col-form-label">{{ __('Email') }}</label>
                                <input id="email4" type="text" class="form-control @error('email4') is-invalid @enderror" name="email4" value="{{ old('email4') }}" autocomplete="email4">

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
                                <label for="name5" class="col-form-label">{{ __('Name') }}</label>
                                <input id="name5" type="text" class="form-control @error('name5') is-invalid @enderror" name="name5" value="{{ old('name5') }}" autocomplete="name5" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="email5" class="col-form-label">{{ __('Email') }}</label>
                                <input id="email5" type="text" class="form-control @error('email5') is-invalid @enderror" name="email5" value="{{ old('email5') }}" autocomplete="email5">

                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>
                        <br />
                        <div class="row mb-12">
                            <div class="col-md-12">
                                <label for="phone" class="col-form-label">{{ __('Phone') }}</label>
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div>
                        </div>

                        <br />

                        <div class="row mb-12">
                            <div class="col-md-12">
                                <label for="address" class="col-form-label">{{ __('Address') }}</label>
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div>
                        </div>
                        <br />
                        <div class="row mb-12">
                            <div class="col-md-6">
                                <select class="form-control" name="airline" id="airline" required>
                                    <option value="">Select Payment Method</option>
                                    <option value="credit">Credit Card</option>
                                    <option value="debit">Debit Card</option>
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
                        <div class="row mb-12">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Continue to Payment') }}
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
