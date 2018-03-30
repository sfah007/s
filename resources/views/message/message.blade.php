@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1>Message / <small>send messages</small></h1>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="POST" action="{{ route('store_message') }}">
                    	{{ csrf_field() }}

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Course & Batch</label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <select name="batch_course" class="form-control" required="required">
                            @foreach ($batch as $batch) 
                              <option value="{{$batch->batch_course}}">{{$batch->batch_course}}</option>
                        @endforeach 
                          </select>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Message Body
                        </label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" name="message_body" placeholder="Maximum 160 Characters" required="required"></textarea>
                        </div>
                      </div>

                      




                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Send Message</button>
                        </div>
                      </div>

                    </form>
                    
                  </div>
                </div>
              </div>

          
</div>
@endsection