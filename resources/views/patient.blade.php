@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
              @foreach($patient_profile as $value)
                <div class="text-center">
                  <!-- <img class="profile-user-img img-fluid img-circle"
                       src="/assets/dist/img/user4-128x128.jpg"
                       alt="User profile picture"> -->
                      @if(strlen($value->image) > 1)
                          <img alt="{{$value->name}}" style="height: 100px;" class="profile-user-img img-fluid img-circle" src="/uploads/patients/{{$value->image}}">
                      @else
                          <img alt="{{$value->name}}" style="height: 100px;" class="profile-user-img img-fluid img-circle" src="/img/user.png" />
                      @endif
                </div>
                @endforeach

                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                @foreach($patient_profile as $value)
                
                <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Occupation</b> <a class="float-right">{{ $value->occupation }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>User Id</b> <a class="float-right">{{ $value->mobile_number }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{ $value->email }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Mobile Number</b> <a class="float-right">{{ $value->mobile_number }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Date of Birth</b> <a class="float-right">{{ $value->date_of_birth }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Disease</b> <a class="float-right">{{ $value->diseases	 }}</a>
                  </li>
                </ul>
                @endforeach
                <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#aboutme" data-toggle="tab">About Me</a></li>
                  <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Activity</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li> -->
                  <!-- <li class="nav-item"><a class="nav-link" href="#settings"  data-toggle="tab">Edit Profile</a></li> -->
                  <!-- @foreach($patient_profile as $value)
                  <li class="nav-item">   
                       <a class="nav-link" href="/patientProfileEdit/{{ $value->id }}" data-toggle="tab" >Edit Profile</a> 
                </li>
                @endforeach -->
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class=" tab-pane" id="activity">
                    <!-- Post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="/assets/dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">{{ Auth::user()->name }}</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="Response">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->

                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane active" id="aboutme">
                  <div class="card card-primary">

              <!-- /.card-header -->
              @foreach($patient_profile as $value)
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>
                <p class="text-muted">
                  {{ $value -> education }}
                </p>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Home Address</strong>
                <p class="text-muted">{{ $value -> address }}</p>
                <hr>
                <strong><i class="fas fa-pencil-alt mr-1"></i> Gender</strong>
                <p class="text-muted">
                  <span class="tag tag-danger">{{ $value -> gender }}</span>
                </p>
                <hr>
                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                <p class="text-muted">{{ $value -> notes }}</p>

                <span class="input-group-btn">
                      <a href="/patientProfileEdit/{{ $value->id }}" class="btn btn-success float-right" >Edit Profile</a>
                </span>
              </div>
              @endforeach
              <!-- /.card-body -->
            </div>
         </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="settings">
                   
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
