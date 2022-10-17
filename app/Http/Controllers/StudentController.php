<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_all_student(){
        $data = Student::all();
        return view('student_manage',['students'=>$data]);
    }

    public function get_student_by_id(Student $id){
        return view('student_edit',['student'=>$id]);
    }

    public function update(Request $request, Student $id){
        $id->update([
            'fullname' => $request->fullname,
            'birthday' => $request->birthday,
            'address' => $request->address
        ]);

        return redirect('students');
    }
}
