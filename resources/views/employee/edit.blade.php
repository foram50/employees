@extends('layouts.app')
@section('title',"formpage")
@section('pagg_css')
<link rel="stylesheet" href="dist/css/datepicker.min.css">

@endsection
@section('content')
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

       <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('employee.update',$employees->id)}} "method="POST">
              @csrf
              @method('PUT')
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Id</label>
                    <input type="text" class="form-control" id="id" value="{{$employees->id ?? ''}}" name="name" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="name" value="{{$employees->name ?? ''}}" name="name" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Designation</label>
                    <input type="text" class="form-control" id="designation"  value="{{$employees->designation ?? ''}}" name="designation" placeholder="Enter Designation">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Salary</label>
                    <input type="text" class="form-control" id="salary"  value="{{$employees->salary ?? ''}}" name="salary" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Joinong Date</label>
                    <input type="date" class="form-control" id="joining_date"  value="{{$employees->joining_date ?? ''}}" name="joining_date" placeholder="Enter password">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           

           
           

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
      @endsection