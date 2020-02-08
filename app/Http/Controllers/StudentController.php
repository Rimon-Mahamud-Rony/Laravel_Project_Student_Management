<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
    	$varstudents = Student::all();
    	return view('index')->with('ctstudents' ,$varstudents);
    }

    public function create()
    {
    	return view('create');
    }

    public function editstudent($id)
    {
    	$edit_st_id = Student::find($id);
    	return view('edit')->with('take_edit_st_id', $edit_st_id);
    }


    public function store(Request $request)
    {
    	//dd('submitted'); insert data

        //check validation 

        $this->validate($request, [
            'name' => 'required | string | max:25',
        'department_name' => 'required | string',
        'registration_id' => 'required | integer',
        'info'  => 'nullable',
        'department_name' => 'required | string',

        ]);

    	$studentcontrol = new Student ; 

    	$studentcontrol->name = $request->name;
    	$studentcontrol->department_name = $request->department_name;
    	$studentcontrol->registration_id = $request->registration_id;
    	$studentcontrol->info = $request->info;

    	$studentcontrol->save();

    	return redirect()->route('index');

    }

    public function update(Request $request , $id)
    {
    	//dd('submitted'); insert data

    	$update_student_id = Student::find($id);

    	$update_student_id->name = $request->name;

    	$update_student_id->department_name = $request->department_name;

    	$update_student_id->registration_id = $request->registration_id;
  
    	$update_student_id->info = $request->info;

    	$update_student_id->save();
    	return redirect()->route('index');

    }


    public function delete($id)
    {
    	//dd('submitted'); insert data

    	$delete_student_id = Student::find($id);

    	$delete_student_id->delete();
    	return redirect()->route('index');

    }
}
