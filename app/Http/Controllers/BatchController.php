<?php

namespace App\Http\Controllers;

use App\Batch;
use PDF;
use DB;
use App\Task;
use App\Course;
use App\Student;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $batch = Batch::all();
        return view('batch/batch_list')->with('batch',$batch);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('batch/add_batch')->with('courses',$courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $new_batch = new Batch;
            $course_name = $request->course_name;
            $name = $request->name;
            $course_name = strtoupper($course_name);
            $name = strtoupper($name);
            $new_batch->name = $name;
            $new_batch->course_name = $course_name;
            $new_batch->batch_course = $course_name.' - '.$name;
            $new_batch->days = $request->days;
            $new_batch->start_date = $request->start_date;
            $new_batch->end_date = $request->end_date;
            $new_batch->time = $request->time;
            $new_batch->status = $request->status;
            $new_batch->save();
            $tasks = DB::table('tasks')
            ->select('id','name','course_name','batch_name','topics','status')
            ->where('course_name',$course_name)
            ->groupBy('course_name','name')
            ->get();
            foreach ($tasks as $task) {
                $taskxx = new Task;
                $taskxx->name = $task->name;
                $taskxx->course_name = $task->course_name;
                $taskxx->batch_name = $name;
                $taskxx->topics = $task->topics;
                $taskxx->status = "pending";
                $taskxx->save();
            }
            $batch = Batch::all();
            return view('batch/batch_list')->with('batch',$batch);
    }


    public function delete($id)
    {

        $batch = Batch::find($id);
        $batch_name = $batch->name;
        $course_name = $batch->course_name;
        $student = Student::where('batch_name',$batch_name)->where('course_name',$course_name);
        $student->delete();
        $batch->delete();
        $task = Task::where('batch_name',$batch_name)->where('course_name',$course_name);
        $task->delete();
        $batch=Batch::all();
        return view('batch/batch_list')->with('batch',$batch);

    }

    public function downloadAttendance($id){
      $batch = Batch::find($id);
      $course = $batch->course_name;
      $students = Student::where('course_name',$course)->where('batch_name',$batch->name)->get();
      //return $students;
      $pdf = PDF::loadView('batch/attendance', compact('students','batch'));
      return $pdf->download('attendance.pdf');

    }

    public function downloadExamSheet($id){
      $batch = Batch::find($id);
      $course = $batch->course_name;
      $students = Student::where('course_name',$course)->where('batch_name',$batch->name)->get();
      //return $students;
      $pdf = PDF::loadView('batch/examsheet', compact('students','batch'));
      return $pdf->download('examsheet.pdf');

    }

    public function downloadBatchInfo($id){
      $batch = Batch::find($id);
      $course = $batch->course_name;
      $students = Student::where('course_name',$course)->where('batch_name',$batch->name)->get();
      //return $students;
      $pdf = PDF::loadView('batch/info', compact('students','batch'));
      return $pdf->download('attendance.pdf');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function show(Batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function edit(Batch $batch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Batch $batch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batch $batch)
    {
        //
    }
}
