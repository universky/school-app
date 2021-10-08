<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\School;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $student = Student::get()->sortByDesc('id');

        return view('student',[
            "student" => $student
        ]);
    }

    public function new_std(){
        $school = School::get()->sortByDesc('id');

        return view('addStd',compact(['school']));
    }
    
    public function store(){
        Student::create(request()->all());
        $student = Student::get()->sortByDesc('id');
    	

    	return view('student',compact(['student']),[
            "title" => "Student"
        ]);
    }

    public function update(Request $request, $id){

        $std = Student::findOrFail($id);
        $std->name = $request->name;
        $std->address = $request->address;

        try{
            $std->save();
        }catch(Exception $id){

        }

	    return redirect('/student');
    }

    public function destroy($id){

        $std = Student::findOrFail($id);
        

        $std->delete();

        return redirect()->back();
    }
}
