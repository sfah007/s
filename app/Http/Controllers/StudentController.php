<?php

namespace App\Http\Controllers;

use App\Student;
use App\Batch;
use App\Course;
use App\Account;
use PDF;
use SMS;
use Illuminate\Http\Request;

class StudentController extends Controller
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

        $student = Student::all();
        return view('student/student_list')->with('student',$student);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $batch = Batch::all();
        return view('student/admit_student')->with('batch',$batch);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $new_student = new Student;
            $batch = Batch::where('batch_course', $request->batch_course)->first();





            $new_student->name = $request->name;
            $new_student->course_name = $batch->course_name;
            $new_student->batch_name = $batch->name;
            $new_student->registration = $request->registration;
            $new_student->contact = $request->contact;
            $new_student->guardian_contact = $request->guardian_contact;
            $new_student->waiver_reference = $request->waiver_reference;
            $new_student->waiver_amount = $request->waiver_amount;
            $new_student->paid_amount = $request->paid_amount;
            $new_student->college = $request->college;
            $new_student->school = $request->school;


            $new_student->save();


        $acc = new Account;
        $acc->description = "Admission - ".$request->registration;
        $acc->type = "Payment";
        $acc->amount = $request->paid_amount;
        $acc->date = date("m/d/Y");
        $acc->save();


            $student = Student::all();
            return view('student/student_list')->with('student',$student);
    }



    public function downloadPDF($id){
      $student = Student::find($id);

      $pdf = PDF::loadView('student/student_pdf', compact('student'));
      return $pdf->download('invoice.pdf');

    }

    public function delete($id)
    {

        $student = Student::find($id);
        $student->delete();
        $student=Student::all();
        return view('student/student_list')->with('student',$student);

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
