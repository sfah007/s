@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>Student / <small>list of all existing students</small></h1>
              </div>

            <div class="clearfix"></div>

            <div class="row">
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Students' List</h2>
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
                          <th>Name</th>
                          <th>Course Name</th>
                          <th>Batch Name</th>
                          <th>Registration</th>
                          <th>Roll</th>
                          <th>Student's<br>Contact No.</th>
                          <th>Guardian's<br>Contact No.</th>
                          <th>Waiver<br>Reference</th>
                          <th>Waiver<br>amount</th>
                          <th>Paid<br>amount</th>
                          <th>School</th>
                          <th>College</th>
                          <th>Invoice</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      	
                      	@foreach ($student as $student) 
                      		<tr>
                      			<th>{{$student->name}}</th>
                      			<th>{{$student->course_name}}</th>
                            <th>{{$student->batch_name}}</th>
                            <th>{{$student->registration}}</th>
                            <th>{{$student->id}}</th>
                            <th>{{$student->contact}}</th>
                            <th>{{$student->guardian_contact}}</th>
                            <th>{{$student->waiver_reference}}</th>
                            <th>{{$student->waiver_amount}}</th>
                            <th>{{$student->paid_amount}}</th>
                            <th>{{$student->school}}</th>
                            <th>{{$student->college}}</th>
                <th><h1><a href="/downloadPDF/{{$student->id}}" class="glyphicon glyphicon-download"></a></h1></th>           
								<th><h1><a href="#" class="glyphicon glyphicon-pencil"></a></h1></th>
								<th><h1><a href="/delete_student/{{$student->id}}" class="glyphicon glyphicon-trash"></a></h1></th>
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
