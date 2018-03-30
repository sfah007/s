@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>Task / <small>list of all lectures</small></h1>
              </div>

            <div class="clearfix"></div>

            <div class="row">
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lectures</h2>
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
                          <th>Lecture Name</th>
                          <th>Topics</th>
                          <th>Status</th>
                          <th>Make It Done !
                        </tr>
                      </thead>
                      <tbody>
                      	
                      	@foreach ($tasks as $task) 
                      		<tr>
                      			<th>{{$task->name}}</th>
                      			<th>{{$task->topics}}</th>
                      			<th>{{$task->status}}</th>
                            <th><h2><a href="/update_lecture/{{$task->id}}" class="glyphicon glyphicon-check"></a></h2></th>
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
