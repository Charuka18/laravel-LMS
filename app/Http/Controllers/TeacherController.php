<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\ClassModel;
use Hash;

class TeacherController extends Controller
{
    public function listA()
    {
        $data['getRecordA'] = User::getAdmin();
        $data['header_title'] = "Admin List";
        return view('teacher.admin.list',$data);
    }
    public function listT()
    {
        $data['getRecordT'] = User::getTeacher();
        $data['header_title'] = "Teacher List";
        return view('teacher.teacher.list',$data);
    }
    public function listS()
    {
        $data['getRecordS'] = User::getStudent();
        $data['header_title'] = "Student List";
        return view('teacher.student.list',$data);
    }
    public function list()
    {
        $data['getRecord'] = ClassModel::getRecord();
        $data['header_title'] = "Class List";
        return view('teacher.class.list', $data);
    }
    public function add()
    {
        $data['header_title'] = "Add new Class";
        return view('teacher.class.add',$data);
    }
    public function insert(Request $request)
    {
        $save = new ClassModel;
        $save->name = $request->name;
        $save->status = $request->status;
        $save->created_by = Auth::user()->id;
        $save->save();

        return redirect('teacher/class/list')->with('success', "Class successfully Add");
    }
    public function edit($id)
    {
        $data['getRecord'] = ClassModel::getSingle($id);
        if(!empty($data['getRecord']))
        {
            $data['header_title'] = "Edit Class";
            return view('teacher.class.edit',$data);
        }
        else
        {
            abort(404);
        }
    }
    public function update($id, Request $request)
    {
        $save = ClassModel::getSingle($id);
        $save->name = $request->name;
        $save->status = $request->status;
        $save->save();

        return redirect('teacher/class/list')->with('success', "Class successfully Update");
    }
    public function delete($id)
    {
        $save = ClassModel::getSingle($id);
        $save -> is_delete =1;
        $save->save();

        return redirect('teacher/class/list')->with('success', "Class successfully Deleted");
    }
    
    public function join($id)
    {
        $user = User::getSingle($id);
        $user -> is_atend =1;
        $user->save();

        return redirect('teacher/class/list')->with('success', "Student successfully atend class");
    }
    
    public function atend()
    {
        $data['getRecordS'] = User::getStudentatend();
        $data['header_title'] = "Student List";
        return view('teacher.atend.list',$data);
    }

}
