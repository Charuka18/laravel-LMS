@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Class list</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            <a href="{{asset('teacher/class/add')}}" class ="btn btn-primary">Add new Class</a>
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
                      <th>Status</th>
                      <th>Created by</th>
                      <th>Create Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                    @foreach($getRecord as $value)
                      <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>
                          @if($value->status == 0)
                            Active
                          @else
                            Inactive
                          @endif
                        </td>
                        <td>{{ $value->created_by_name }}</td>
                        <td>{{ date('d-m-Y H:i A', strtotime($value->created_at)) }}</td>
                        <td>
                        @if($value->created_by_name == Auth::user()->name)
                        <a href="{{url('teacher/class/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{url('teacher/class/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
                        <a href="{{asset('teacher/atend/list')}}" class="btn btn-info">attendance</a>
                        <a href="{{url('teacher/class/join/'.$value->id)}}" class="btn btn-warning">Join</a>
                          @endif
                        </td>
                      </tr>
                    @endforeach
                  <tbody>
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