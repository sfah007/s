@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1>Student / <small>admit a new student</small></h1>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <br />

                      
                    
                    <form class="form-horizontal form-label-left" method="POST" action="{{ route('store_student') }}">
                    	{{ csrf_field() }}
                      <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="name" class="form-control" placeholder="" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Course & Batch</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="batch_course" class="form-control" required="required">
                          	@foreach ($batch as $batch) 
                              <option value="{{$batch->batch_course}}">{{$batch->batch_course}}</option>
                        @endforeach 
                          </select>
                        </div>
                      </div>

                      



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Registration No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" name="registration" class="form-control" placeholder="SSC / HSC Registration No." required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="contact" class="form-control" placeholder="" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Guardian's Contact No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="guardian_contact" class="form-control" placeholder="SMS will be sent to this number" required="required">
                        </div>
                      </div>

                      <br>
                      <br>
                      <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>

                    </div>
                    
                    <div class="col-md-5 col-md-offset-1">
                      
                    
                         
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Waiver Reference</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="waiver_reference" class="form-control" placeholder="" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Waiver Amount</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" name="waiver_amount" class="form-control" placeholder="" required="required" min="0">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Paid Amount</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" name="paid_amount" class="form-control" placeholder="" required="required" min="0">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">School</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="school" class="form-control" placeholder="" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">College</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="college" class="form-control" placeholder="" >
                        </div>
                      </div>

                      <br>
                   

                    </form>

                    
                  </div>
                </div>
              </div>

          
</div>
@endsection