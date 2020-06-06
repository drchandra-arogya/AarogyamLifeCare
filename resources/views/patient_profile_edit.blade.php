
@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update your profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Update your profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-info">
                            <div class="card-header" style="background-color: #ffffff;">
                                <h3 class="card-title" style="color: #2d3238;">Edit</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="/patientProfileUpdate" enctype="multipart/form-data" class="form-horizontal">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $patient->id }}">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="name" value="{{$patient->name}}" class="form-control" id="inputEmail3" placeholder="Update your name here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-6">
                                             <!-- <input type="file" name="patient_image" style="display: none;" accept=".jpg, .jpeg, .png" value="{{$patient->patient_image}}" class="form-control" id="inputEmail3" placeholder="Update your image here"> -->
                                             <img alt="image" id="image-view" class="img-circle m-t-xs img-responsive" src="{{strlen($patient->image) > 2 ? '/uploads/patients/'.$patient->image : '/img/user.png' }}" style="width : 80px;"/>
                                            <input type="file" name="image" id='image' accept=".jpg,.png"/>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Occupation</label>
                                        <div class="col-sm-6">
                                          <input type="text" name="occupation" value="{{$patient->occupation}}" class="form-control" id="inputEmail3" placeholder="Update your Occupation here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">User id</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="mobile_number" value="{{$patient->mobile_number}}" class="form-control" id="inputEmail3" placeholder="Update your user id here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="email" value="{{$patient->email}}" class="form-control" id="inputEmail3" placeholder="Update your email here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile Number</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="mobile_number" value="{{$patient->mobile_number}}" class="form-control" id="inputEmail3" placeholder="Update your mobile number here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Date of birth</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="date_of_birth" value="{{$patient->date_of_birth}}" class="form-control" id="inputEmail3" placeholder="Update your Date of birth here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Disease</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="diseases" value="{{$patient->diseases}}" class="form-control" id="inputEmail3" placeholder="Update your disease here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Education</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="education" value="{{$patient->education}}" class="form-control" id="inputEmail3" placeholder="Update your education here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Home Address</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="address" value="{{$patient->address}}" class="form-control" id="inputEmail3" placeholder="Update your address  here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Gender</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="gender" value="{{$patient->gender}}" class="form-control" id="inputEmail3" placeholder="Update your gender here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Notes</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="notes" value="{{$patient->notes}}" class="form-control" id="inputEmail3" placeholder="Update your notes here">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer" style="background-color: rgb(255, 255, 255);">
                                    <a class="btn btn-danger" href="/patient">Cancel</a>
                                    <button type="submit" class="btn btn-success float-right">Update</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
<script>
    $("#image").change(function() {
    previewImage(this);
});
function previewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#image-view').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection


