@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1>Batch / <small>add a new batch</small></h1>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="POST" action="{{ route('store_batch') }}">
                    	{{ csrf_field() }}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Batch Name</label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="name" class="form-control" placeholder="" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Course Name</label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <select name="course_name" class="form-control" required="required">
                          	@foreach ($courses as $course) 
                              <option value="{{$course->name}}">{{$course->name}}</option>
                        @endforeach 
                          </select>
                        </div>
                      </div>




                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Days</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <p style="padding: 5px;">
                            <input type="checkbox" name="days[]" value="SAT"data-parsley-mincheck="2" required class="flat" /> SAT 

                            <input type="checkbox" name="days[]" value="SUN" class="flat" /> SUN </input> 


                            <input type="checkbox" name="days[]" value="MON" class="flat" /> MON 


                            <input type="checkbox" name="days[]" value="TUE" class="flat" /> TUE 

                            <input type="checkbox" name="days[]" value="WED" class="flat" /> WED 


                            <input type="checkbox" name="days[]" value="THU" class="flat" /> THU 


                            <input type="checkbox" name="days[]" value="FRI" class="flat" /> FRI 

                          </p>
                        </div>
                      </div> -->



                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Days
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                          
                          <div class="radio">
                            <label>
                              <input type="radio" value="SAT - MON - WED" class="flat" checked name="days"><strong> SAT - MON - WED</strong>
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" value="SUN - TUE - THU" class="flat" name="days"><strong> SUN - TUE - THU</strong>
                            </label>
                          </div>
                        </div>
                      </div>





                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Start Date  (MM/DD/YYYY)</label>
                          <fieldset>
                            <div class="control-group">
                              <div class="controls">
                                <div class="col-md-3 col-sm-3 col-xs-12 xdisplay_inputx form-group has-feedback">
                                  <input type="text" name="start_date" class="form-control has-feedback-left" id="single_cal1" aria-describedby="inputSuccess2Status">
                                  <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">End Date  (MM/DD/YYYY)</label>
                          <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="col-md-3 col-sm-3 col-xs-12 xdisplay_inputx form-group has-feedback">
                                <input type="text" name="end_date" class="form-control has-feedback-left" id="single_cal3" aria-describedby="inputSuccess2Status3">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Batch Time</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="time" value="07:00" name="time" class="form-control" required="required">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Batch Status
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                          
                          <div class="radio">
                            <label>
                              <input type="radio" value="Running" class="flat" checked name="status"><strong> Running </strong>
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" value="Finished" class="flat" name="status"><strong> Finished </strong>
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