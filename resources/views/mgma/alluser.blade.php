@extends('mgma.layouts.app')

@section('content')
<div class="container pt-2">
    <div class="row justify-content-center">
        <div class="col-md-12">


            <div class="card">
                <div class="card-header">
                    <h3>Manage Users</h3>

                    <div class="card-tools">
                        <!-- <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div> -->
                        <a href="{{ route('create') }}" class="label label-primary"><i class="fa fa-plus-circle"> Create New User</i></a>
                    </div>
                    <ul class="rmg_nav">

                        <li class="active"><a href="#tab1" class="active">All <small class="primary">(15)</small></a></li>
                        <li><a href="#tab2">Admin <small class="primary">(1)</small>
                            </a></li>
                        <li><a href="#tab3">MGMA </a></li>

                        <li><a href="#tab5">MOC </a></li>
                        <li><a href="#tab6">RMGPP </a></li>

                    </ul>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="primary">{{ $user->id }}</td>
                                <td><a href="#">{{ $user->name }}</a></td>
                                <td><a href="#">{{ $user->email }}</a></td>
                                <td>{{ $user->type }}</td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="#"><i class="fa fa-remove"> Remove</i></a>
                                    <a class="btn btn-primary btn-sm" href="{{ url('mgma/user/edit/'.$user->id) }}"><i class="fa fa-edit">Edit</i></a>
                                    <a class="btn btn-warning btn-sm" href="{{ url('admin/reset/'.$user->id)}}"><i class="fa fa-lock"> Reset</i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>

        </div>
    </div>
</div>
@endsection