@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Marks Form</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <form method="post" action="">
              {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label>Student Name</label>
                    <input type="text" class="form-control" name="name" required placeholder="Student Name">
                  </div>
                  <div class="form-group">
                    <label>Sabject</label>
                    <input type="text" class="form-control" name="subject" required placeholder="Subject Name">
                  </div>
                  <div class="form-group">
                    <label>Marks</label>
                    <input type="text" class="form-control" name="marks" required placeholder="Marks Name">
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          
          </div>
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection