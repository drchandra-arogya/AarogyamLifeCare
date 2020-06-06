@extends('layouts.login')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="/assets/index2.html"><b>Aarogyam</b></a>
        </div>
        <p class="login-box-msg">Sign in to Aarogyam</p>
        @if(count($errors) >0)
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
        @endif

<form method="POST" action="{{ route('patientauth.login') }}">
    @csrf

    <div class="input-group mb-3">
        <input id="mobile_number" type="text" placeholder="Enter here mobile number"  class="form-control @error('email') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}" required autocomplete="mobile_number" autofocus>
       
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-phone"></span>
            </div>
        </div>
    </div>

    <div class="input-group mb-3">
        <input id="password" type="password" placeholder="Enter here password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input class="form-check-input"  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>

        <div class="col-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
        </div>

        <div class="social-auth-links text-center mb-3">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
            </a>
        </div>
        <p class="mb-1">

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </p>
        <p class="mb-0">
            <a href="/register" class="text-center">Register a new membership</a>
        </p>

</form>
    </div>
@endsection
