@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student list</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            <a href="{{asset('admin/student/add')}}" class ="btn btn-primary">Add new Student</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
            @include('_message')

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Create Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($getRecordS as $value)
                      <tr>
                        <td>{{ $value->id}}</td>
                        <td>{{ $value->name}}</td>
                        <td>{{ $value->email}}</td>
                        <td>{{ $value->created_at}}</td>
                        <td>
                          <a href="{{url('admin/student/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                          <a href="{{url('admin/student/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection