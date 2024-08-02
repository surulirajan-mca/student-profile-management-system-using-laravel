<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    public function createStudent() {
        $datas = [
            'title' => __('studentnew.student_create_title'),
            'heading' => __('studentnew.student_create_heading'),
            'submit' => __('studentnew.student_create_title'),
            'action' => url('create-student')
        ];
        return view('studentnew.student-form', ['datas' => $datas]);
    }

    public function StoreStudentDetails(Request $request) {
       $name = $request->input('name');
       $email = $request->input('email');
       $age = $request->input('age');
       $mobile = $request->input('mobile');
       $department = $request->input('department');

       //Insert the values into the table
       DB::insert('INSERT INTO studentnew(name,email,mobile,age,department) values(?,?,?,?,?)',[$name, $email, $mobile, $age, $department]);

       $datas = [
            'success_title'       => __('studentnew.registration_success'),
            'success_description' => __('studentnew.registration_success_text')
       ];
        
        return view('studentnew.success',compact('datas'));
    }

    public function studentList() {
        $students = DB::select('SELECT * FROM studentnew ORDER BY student_id DESC');
        $datas = [
            'title' => __('studentnew.student_list_title'),
            'heading' => __('studentnew.student_list_heading'),
            'students' => $students
        ];
        return view('studentnew.student-list', compact('datas'));
    }
}
