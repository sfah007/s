@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>Batch / <small>list of all existing batches</small></h1>
              </div>

            <div class="clearfix"></div>

            <div class="row">
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Batch List</h2>
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
                          <th>Batch Name</th>
                          <th>Course Name</th>
                          <th>Batch Code</th>
                          <th>Days</th>
                          <th>Start Date<br>(MM/DD/YYYY)</th>
                          <th>End Date<br>(MM/DD/YYYY)</th>
                          <th>Time</th>
                          <th>Total<br>Students</th>
                          <th>Batch<br>Status</th>
                          <th>Edit</th>
                          <th>Delete</th>
                          <th>Attendance</th>
                          <th>Info</th>
                          <th>Exam<br>Sheet</th>
                        </tr>
                      </thead>
                      <tbody>
                      	
                      	@foreach ($batch as $batch) 
                      		<tr>
                      			<th><a href="/task_list/{{$batch->id}}">{{$batch->name}}</a></th>
                      			<th>{{$batch->course_name}}</th>
                      			<th>{{$batch->id}}</th>
                      			<th>{{$batch->days}}</th>
                      			<th>{{$batch->start_date}}</th>
                      			<th>{{$batch->end_date}}</th>
                            <th>{{$batch->time}}</th>
                            <?php
                            $total = \App\Student::where('batch_name',$batch->name)->where('course_name',$batch->course_name)->count();
                            ?>

                            <th>{{$total}}</th>
                            <th>{{$batch->status}}</th>
                            
								<th><h2><a href="#" class="glyphicon glyphicon-pencil"></a></h2></th>
								<th><h2><a href="/delete_batch/{{$batch->id}}" class="glyphicon glyphicon-trash"></a></h2></th>
                <th><h2><a href="/downloadAttendance/{{$batch->id}}" class="glyphicon glyphicon-download"></a></h2></th>
                <th><h2><a href="/downloadBatchInfo/{{$batch->id}}" class="glyphicon glyphicon-download"></a></h2></th>
                <th><h2><a href="/downloadExamSheet/{{$batch->id}}" class="glyphicon glyphicon-download"></a></h2></th>
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
