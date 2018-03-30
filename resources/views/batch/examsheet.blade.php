<?php
$date = date('d-M-Y');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Goudy+Bookletter+1911" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet"> -->
    <title></title>
    <style>

      body{
        background: #fff;
        margin: 0px;
        padding: 0px;
        font: 1em serif;
      }
      .wrapper {
        width: 100%;
        margin: auto;
        background: #fff;
        border: 1px solid rgb(167,139,175);
      }

    /*  hgroup {
        background: rgb(173, 110, 191);
      }*/

      h1 {
        text-align: center;
        font: bold serif;
        color: rgb(104,79,79);
      }

      h3 {
        text-align: center;
        font: 1em Helvetica,Arial, serif;
        color: rgb(186, 130, 130);
      }

      #time {
        float: left;
        padding-left: 70px;
        font-weight: bold;
        color: rgb(104,79,79);
      }

      #date {
        float: right;
        font-weight: bold;
        color: rgb(104,79,79);
        padding-right: 70px;
      }

      #myTable {
        clear: both;
        margin: auto;
        width: 85%;
        table-layout: fixed;
        border: 1px solid rgb(150, 150, 150);
      }

      thead {
        background: rgb(87,155,224);
        border-radius: 5px;
      }

      tbody {
        border-bottom: 1px solid rgb(221,221,221);
      }

      th {
        border-bottom: 2px solid rgb(102,120,177);
        word-wrap: break-word;
      }

      td {
        padding: 5px;
        border-right: 1px solid rgb(199,199,199);
        border-bottom: 1px solid rgb(199,199,199);
        text-align: center;
        word-wrap: break-word;
      }

      tr:nth-child(even){
        background: rgb(210,210,210);
      }

      tr:hover {
        background: rgb(123,190,209);
      }


    </style>
  </head>
  <body>
    <div class='wrapper'>
      <hgroup>
        <h1>Science HUB</h1>
        <h3>{{$batch->batch_course}}</h3>
        <h4 align="center">Attendance Sheet</h4>
      </hgroup>
      <div class="clock">
        <span id='time'>Batch Time - {{$batch->time}}</span>
        <span id='date'>Date : {{$date}}</span>
      </div>
      <br/>
      <br/>
      <table id="myTable">
        <thead>
        <tr>
          <th width=10%>Roll</th>
          <th width=30%>Name</th>
          <th width=15%>Written</th>
          <th width=15%>Objective</th>
          <th width=15%>Total</th>
          <th width=15%>Position</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
        <tr>
          <td>{{$student->id}}</td>
          <td>{{$student->name}}</td>
          <td>                  </td>
          <td>                  </td>
          <td>                  </td>
          <td>                  </td>
        </tr>
        @endforeach
        </tbody>
      </table>
      <br/>
      <br/>
    </div>

  </body>
</html>
