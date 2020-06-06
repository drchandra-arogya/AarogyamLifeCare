@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
{{--                        <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                        <li class="breadcrumb-item active">Admin Details</li>--}}
                    </ol>
                    <div class="col-sm-3 float-sm-right">
                        <a class="btn btn-primary" href="/admin/user/create">Add Admin</a>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Admin Details</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered ">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile Number </th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->mobile_number}}</td>
                                <td>{{ implode(', ',$user->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td> <a class="btn btn-success" href="/admin/user/edit">Edit</a> |
                                    <a class="btn btn-danger" href="#">Delete</a>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    </div>

@endsection
