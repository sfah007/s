<?php

namespace App\Http\Controllers;
use App\Batch;
use App\Course;
use App\Task;
use DB;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $batch = Batch::find($id);
        $batch_name = $batch->name;
        $course_name = $batch->course_name;
        $tasks = Task::where('batch_name',$batch_name)->where('course_name',$course_name)->get();
        return view('task/task_list')->with('tasks',$tasks);
    }

    public function index_all()
    {
        $tasks = DB::table('tasks')
            ->select('id','name','course_name','batch_name','topics','status')
            ->groupBy('course_name','name')
            ->get();
        return view('task/task_list_all')->with('tasks',$tasks);
    }
    public function delete($id)
    {

        $task = Task::find($id);
        $name = $task->name;
        $course_name = $task->course_name;
        $tasks = Task::where('name',$name)->where('course_name',$course_name);
        $tasks->delete();
        $tasks=Task::all();
        return view('task/task_list_all')->with('tasks',$tasks);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('task/add_lecture')->with('courses',$courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = $request->course_name;
        $batches  = Batch::where('course_name',$course)->get();
        foreach ($batches as $batch) {
            $new_task = new Task;
            $new_task->name = $request->name;
            $new_task->course_name = $request->course_name;
            $new_task->batch_name = $batch->name;
            $new_task->topics = $request->topics;
            $new_task->status = "Pending";
            $new_task->save();
        }
        $courses = Course::all();
        return view('task/add_lecture')->with('courses',$courses);
        
    }

    public function done($id)
    {
        Task::where('id', $id)->update(array('status' => 'Completed'));
        $task = Task::find($id);
        $name = $task->batch_name;
        $course_name = $task->course_name;
        $batch = Batch::where('name',$name)->where('course_name',$course_name)->first();
        $batch_name = $batch->name;
        $course_name = $batch->course_name;
        $tasks = Task::where('batch_name',$batch_name)->where('course_name',$course_name)->get();
        return view('task/task_list')->with('tasks',$tasks);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
