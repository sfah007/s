@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
  <div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>Account / <small>list of all payments and Expenses</small></h1>
              </div>

            <div class="clearfix"></div>

            <div class="row">

              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><font style="color: red">Restricted Access -> A D M I N</font></h2>
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
                          <th>Description</th>
                          <th>Amount</th>
                          <th>Type</th>
                          <th>Date (MM/DD/YYYY)</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        @foreach ($accs as $acc) 
                          <tr>
                            <th>{{$acc->description}}</th>
                            <th>{{$acc->amount}}</th>
                            <th>{{$acc->type}}</th>
                            <th>{{$acc->date}}</th>
                            <th><h2><a href="/delete_acc/{{$acc->id}}" class="glyphicon glyphicon-trash"></a></h2></th>
                          </tr>
                        @endforeach 
                      </tbody>
                    </table>
          
          
                  </div>
                </div>
                <h2><font style="color: black">Total Balance   :   BDT {{$total}}</font></h2>
                <h2><font style="color: green">Total Payment  :   BDT {{$payment}}</font></h2>
                <h2><font style="color: red">Total Expense  :   BDT {{$expense}}</font></h2 >
              </div>
            </div>
          </div>
          
</div>
@endsection
