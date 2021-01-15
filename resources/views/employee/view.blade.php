@extends('layouts.app')
@section('title',"tablepage")
@section('content')
     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href="{{route('employee.create')}}"><button class="btn btn-primary">ADD</button><a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Salary</th>
                    <th>Joining Date</th>
                    <th style="width=50px">action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($employees as $employee)
                  <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->name}} </td>
                    <td>{{$employee->designation}}</td>
                    <td>{{$employee->salary}}</td>
                    <td>{{$employee->joining_date}}</td>
                    <td>
                    <a href="{{route('employee.edit',$employee->id)}}"><button class="btn btn-success btn-sm">EDIT</button><a><br>
                    <form action="{{route('employee.destroy',$employee->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                   <button class="btn btn-danger btn-sm">DELETE</button>
                   </form>
                    </td>
                   
                  </tr>
               @endforeach
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection