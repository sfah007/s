@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>Courses / <small>view all courses</small></h1>
              </div>

            <div class="clearfix"></div>

            <div class="row">
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Course List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Course Name</th>
                          <th>Course Code</th>
                          <th>Tution Fee</th>
                          <th>Duration (weeks)</th>
                          <th>Status</th>
                          <th>Description</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      	
                      	@foreach ($courses as $course) 
                      		<tr>
                      			<th>{{$course->name}}</th>
                      			<th>{{$course->id}}</th>
                      			<th>{{$course->fee}}</th>
                      			<th>{{$course->duration}}</th>
                      			<th>{{$course->status}}</th>
                      			<th>{{$course->description}}</th>
								<th><a href="#" class="glyphicon glyphicon-pencil"></a></th>
								<th><a href="#" class="glyphicon glyphicon-trash"></a></th>
                      		</tr>
                      	@endforeach	
                      </tbody>
                    </table>
					
					
                  </div>
                </div>
              </div>
            </div>
          </div>
          
</div>
@endsection
