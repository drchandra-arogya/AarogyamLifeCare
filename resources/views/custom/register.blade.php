<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">

            @if(count($errors) >0)
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
            @endif

            <form class="form-horizontal" action="{{route('custom.register')}}" method="post">
                {{csrf_field()}}
                <fieldset>
                    <legend>Register Here</legend>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Mobile Number</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="mobile_number" value="{{old('mobile_number')}}" placeholder="Mobile Number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="password"  placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Confirm Password</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
