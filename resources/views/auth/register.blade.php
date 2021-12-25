@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h2 class="card-header border-0  text-center mt-3 mb-2">{{ __('Register') }}</h2>

                    <div class="card-body">
                        <center>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="col-md-1"></div>

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" required autocomplete="name"
                                            placeholder="Enter your name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-12">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email"
                                            placeholder="Enter your email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-12">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password" placeholder="Enter password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-12">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="Enter confirm password">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-12">
                                    <button type="submit" class="btn btn-default">
                                        {{ __('Register') }}
                                    </button>
                                    </div>
                                </div>
                            </form>
                        </center>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
