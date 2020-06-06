@extends('layouts.login')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="/assets/index2.html"><b>Aarogyam</b></a>
        </div>
                    <p class="login-box-msg">Sign in to Aarogyam</p>
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="input-group mb-3">
        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-phone"></span>
            </div>
        </div>
    </div>
{{--    <div class="input-group mb-3">--}}
{{--        <input id="mobile_number" type="text" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}" required autocomplete="mobile_number" autofocus>--}}
{{--        @error('mobile_number')--}}
{{--        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--        @enderror--}}
{{--        <div class="input-group-append">--}}
{{--            <div class="input-group-text">--}}
{{--                <span class="fas fa-phone"></span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="input-group mb-3">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

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
