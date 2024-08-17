<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentcontroller extends Controller
{
    public function createStudent() {
        $datas = [
            'title' => __('studentnew.student_create_title'),
            'heading' => __('studentnew.student_create_heading'),
            'submit' => __('studentnew.student_create_title'),
            'action' => url('create-student')
        ];
        return view('student-form', ['datas' => $datas]);
    }

    public function StoreStudentDetails(Request $request) {

        //Validation
        $rules = [
            'name' => 'required | string | max:50',
            'email' => 'required | email | max:50',
            'mobile' => [
                'required',
                'regex:/^\d{10}$/'
            ],
            'department' => 'required | string'
       ];

       $ValidatedDatas = $request->validate($rules);
       //dd($ValidatedDatas);

       $name = $ValidatedDatas['name'];
       $email = $ValidatedDatas['email'];
       $age = $request->input('age');
       $mobile = $ValidatedDatas['mobile'];
       $department = $ValidatedDatas['department'];

       //Insert the values into the table
       DB::insert('INSERT INTO studentnew(name,email,mobile,age,department) values(?,?,?,?,?)',[$name, $email, $mobile, $age, $department]);

       $datas = [
            'success_title'       => __('studentnew.registration_success'),
            'success_description' => __('studentnew.registration_success_text')
       ];
        
        return view('success',compact('datas'));
    }

    public function UpdateStudentDetails(Request $request, $student_id) {

        //Validation
        $rules = [
            'name' => 'required | string | max:50',
            'email' => 'required | email | max:50',
            'mobile' => [
                'required',
                'regex:/^\d{10}$/'
            ],
            'department' => 'required | string'
        ];

        $ValidatedDatas = $request->validate($rules);

        $name = $request->input('name');
        $email = $request->input('email');
        $age = $request->input('age');
        $mobile = $request->input('mobile');
        $department = $request->input('department');

        //Updating the Column values in the studentnew table
        DB::update('UPDATE `studentnew` SET `name`=?, email=?, age=?, mobile=?,department=? WHERE student_id=?',[$name, $email, $age, $mobile, $department, $student_id]);
        
        $datas = [
            'success_title'       => __('studentnew.update_success'),
            'success_description' => __('studentnew.update_success_text')
        ];

        return view('success',compact('datas'));
    }

    public function editStudent($student_id) {
        $studentDetails = DB::select('SELECT * FROM studentnew WHERE student_id=? lIMIT 0,1',[$student_id]);
        //dd($studentDetails);
        $datas = [
            'title' => __('studentnew.student_edit_title'),
            'heading' => __('studentnew.student_edit_heading'),
            'submit' => __('studentnew.student_edit_details'),
            'action' => route('edit-student', ['student_id' => $student_id]),
            'studentdetails' => $studentDetails[0]
        ];
        return view('student-form', compact('datas'));
    }

    public function deleteStudent($student_id) {
        DB::delete('DELETE from `studentnew` WHERE student_id=?', [$student_id]);
        $datas = [
            'success_title'       => __('studentnew.delete_success'),
            'success_description' => __('studentnew.delete_success_text')
        ];
        return view('success',compact('datas'));
    }

    public function studentList() {
        $students = DB::select('SELECT * FROM studentnew ORDER BY student_id DESC');
        $datas = [
            'title' => __('studentnew.student_list_title'),
            'heading' => __('studentnew.student_list_heading'),
            'students' => $students
        ];
        return view('student-list', compact('datas'));
    }
}
