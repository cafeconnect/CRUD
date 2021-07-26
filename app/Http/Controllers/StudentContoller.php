<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentContoller extends Controller
{
    public function addStudent(){
        return view('create-student');
    }
    public function store(Request $request){
       $student = new Student();
       $student->name = $request->name;
       $student->description = $request->description;
       $student->save();
       //return back()->with('message','Record created succefully');
       return redirect('/')->with('message','Record created succefully');
    }
    public function showStudent(){
        $students = Student::all();
        return view('show-student',compact('students'));
    }
    public function studentDelete($id){
      Student::where('id',$id)->delete();
        return back()->with('message',' Record deleted succefully');
    }
}
