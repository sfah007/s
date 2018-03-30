@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1>Task / <small>add a new lecture</small></h1>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="POST" action="{{ route('store_lecture') }}">
                    	{{ csrf_field() }}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Lecture Name</label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <input type="text" name="name" class="form-control" placeholder="" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Course Name</label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <select name="course_name" class="form-control" required="required">
                            @foreach ($courses as $course) 
                              <option value="{{$course->name}}">{{$course->name}}</option>
                            @endforeach 
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Topics
                        </label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" name="topics" placeholder="Topics that will be taught on this lecture"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
                        </label>
                        
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <span><h5><font color="red">*there must be at least one batch under this course !!!</font></h5></span>
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>

          
</div>
@endsection