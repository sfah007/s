@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1>Course / <small>add a new course</small></h1>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="POST" action="{{ route('store_course') }}">
                    	{{ csrf_field() }}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Course Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="name" class="form-control" placeholder="Enter Course Name">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Session</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="session" class="form-control">
                          	<?php
                      	$current_year = date("Y");
                      	$st = $current_year-3;
                      	$en = $current_year+5;
                      	for($i=$st;$i<=$en;$i++)
                      	{
                      		echo '<option value="'.$i.'">'.$i.'</option>';
                      	}
                      ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Course Fee</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" name="fee" class="form-control" placeholder="Enter Course Fee" min="0">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Duration (weeks)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" name="duration" class="form-control" placeholder="Enter Course Duration in weeks" min="0">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Description
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" name="description" placeholder="Things to add about this Course"></textarea>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Status
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                          
                          <div class="radio">
                            <label>
                              <input type="radio" value="Active" class="flat" checked name="status"><strong> Active</strong>
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" value="Inactive" class="flat" name="status"><strong> Inactive</strong>
                            </label>
                          </div>
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