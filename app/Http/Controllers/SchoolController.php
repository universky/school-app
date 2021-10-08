<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\School;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use PHPUnit\Framework\Constraint\Exception;

class SchoolController extends Controller
{
    public function index(){
        $school = School::get()->sortByDesc('id');

        return view('school',compact(['school']));
    }

    public function new_sch(){

        return view('addSch',compact(['school']));
    }

    
    public function store(){
        School::create(request()->all());
        $school = School::get()->sortByDesc('id');
    	

    	return view('school',compact(['school']));
    }

    public function update(Request $request, $id){
    
        $sch = School::findOrFail($id);
        $sch->name = $request->name;
        $sch->address = $request->address;

        try{
            $sch->save();
        }catch(Exception $id){

        }

	    return redirect('/school');
    }

    public function destroy($id){

        $sch = School::findOrFail($id);
        

        $sch->delete();

        return redirect()->back();
    }
}
