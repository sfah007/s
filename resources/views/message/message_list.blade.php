@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>Message / <small>list of all sent messages</small></h1>
              </div>

            <div class="clearfix"></div>

            <div class="row">
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Message List</h2>
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
                          <th>ID</th>
                          <th>Message Body</th>
                          <th>Receiver</th>
                          <th>Time</th>
                        </tr>
                      </thead>
                      <tbody>
                      	
                      	@foreach ($messages as $message) 
                      		<tr>
                      			<th>{{$message->id}}</th>
                      			<th>{{$message->message_body}}</th>
                      			<th>{{$message->batch_course}}</th>
                      			<th>{{$message->time}}</th>
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
