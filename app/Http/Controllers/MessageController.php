<?php

namespace App\Http\Controllers;

use App\Message;
use App\Batch;
use Illuminate\Http\Request;
use App\Student;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();
        return view('message/message_list')->with('messages',$messages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batch=Batch::all();
        return view('message/message')->with('batch',$batch);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $batch = Batch::where('batch_course',$request->batch_course)->first();
        $course_name = $batch->course_name;
        $batch_name = $batch->name;
        $mobile = "";
        foreach (Student::where('batch_name',$batch_name)->where('course_name',$course_name)->cursor() as $student) {
            $mobile = $mobile.",'".$student->guardian_contact."'";
        }
        $mobile = substr($mobile, 1);
        //return $mobile;
        $message = "'".$request->message_body."'"; 
        if(strlen($mobile)>10){
            $value = onnorokom_sms(['message' => $message, 'mobile_number' => [$mobile]]);

            return $value;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
