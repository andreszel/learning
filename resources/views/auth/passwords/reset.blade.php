@extends('layouts.admin-noauth')

@section('content')
<!-- Outer Row -->
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">

                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">{{ __('Reset Password') }}</h1>
                    </div>
                    <form method="POST" class="user" action="{{ route('password.update') }}">
                        @csrf                    
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="name" value="{{ old('email') }}" placeholder="E-Mail Address" required autocomplete="name" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" placeholder="Repeat Password" required autocomplete="new-password">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            {{ __('Reset Password') }}
                        </button>

                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="{{ route('register') }}">Create an Account!</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="{{ '/' }}">Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
