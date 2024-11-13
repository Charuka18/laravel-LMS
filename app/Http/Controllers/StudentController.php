<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ClassModel;
use Hash;

class StudentController extends Controller
{
    public function listT()
    {
        $data['getRecordT'] = User::getTeacher();
        $data['header_title'] = "Teacher List";
        return view('student.teacher.list',$data);
    }
    public function list()
    {
        $data['getRecord'] = ClassModel::getRecord();
        $data['header_title'] = "Class List";
        return view('student.class.list', $data);
    }
}
