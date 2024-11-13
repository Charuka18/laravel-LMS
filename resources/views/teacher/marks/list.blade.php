@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Marks list</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            <a href="{{asset('teacher/marks/add')}}" class ="btn btn-primary">Add new Student Marks</a>
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
                      <th>Subject</th>
                      <th>Marks</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($getRecordm as $value)
                      <tr>
                        <td>{{ $value->id}}</td>
                        <td>{{ $value->name}}</td>
                        <td>{{ $value->subject}}</td>
                        <td>{{ $value->marks}}</td>
                        <td>
                          <a href="{{url('teacher/marks/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                          <a href="{{url('teacher/marks/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
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