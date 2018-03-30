@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1>Account / <small>add expense</small></h1>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="POST" action="{{ route('store_expense') }}">
                    	{{ csrf_field() }}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <input type="text" name="description" class="form-control" placeholder="" required="required">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Amount (BDT)
                        </label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <input type="number" min="0" name="amount" class="form-control" placeholder="" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Date  (MM/DD/YYYY)</label>
                          <fieldset>
                            <div class="control-group">
                              <div class="controls">
                                <div class="col-md-3 col-sm-3 col-xs-12 xdisplay_inputx form-group has-feedback">
                                  <input type="text" name="date" class="form-control has-feedback-left" id="single_cal1" aria-describedby="inputSuccess2Status">
                                  <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                </div>
                              </div>
                            </div>
                          </fieldset>
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