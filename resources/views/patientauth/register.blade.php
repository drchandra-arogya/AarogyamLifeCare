@extends('layouts.login')

@section('content')
<div class="login-box">
        <div class="login-logo">
            <a href="/assets/index2.html"><b>Aarogyam</b></a>
        </div>
    <p class="login-box-msg">Register to Aarogyam</p>
    @if(count($errors) >0)
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
            @endif
<form method="POST" action="{{ route('patientauth.register') }}">
    @csrf
    <div class="input-group mb-3">
        <input id="name" type="text" placeholder="Enter Name Here" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

       
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input id="email" type="email" placeholder="Enter Email Here" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

      
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input id="mobile_number" type="text" placeholder="Enter Mobile Number Here" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}" required autocomplete="mobile_number">

       
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-phone"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input id="password" type="password" placeholder="Enter Confirm Password Here" placeholder="Enter Password Here" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

       
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                    I agree to the <a href="#">terms</a>
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
        <!-- /.col -->
    </div>
</form>
<div class="social-auth-links text-center">
    <p>- OR -</p>
    <a href="#" class="btn btn-block btn-primary">
        <i class="fab fa-facebook mr-2"></i>
        Sign up using Facebook
    </a>
    <a href="#" class="btn btn-block btn-danger">
        <i class="fab fa-google-plus mr-2"></i>
        Sign up using Google+
    </a>
</div>

<a href="/login" class="text-center">I already have a membership</a>
</div>
@endsection
