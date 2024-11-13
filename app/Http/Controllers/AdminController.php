<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AdminController extends Controller
{
    public function listA()
    {
        $data['getRecordA'] = User::getAdmin();
        $data['header_title'] = "Admin List";
        return view('admin.admin.list',$data);
    }
    public function listT()
    {
        $data['getRecordT'] = User::getTeacher();
        $data['header_title'] = "Teacher List";
        return view('admin.teacher.list',$data);
    }
    public function listS()
    {
        $data['getRecordS'] = User::getStudent();
        $data['header_title'] = "Student List";
        return view('admin.student.list',$data);
    }
    public function addA()
    {
        $data['header_title'] = "Add new Admin";
        return view('admin.admin.add',$data);
    }
    public function addT()
    {
        $data['header_title'] = "Add new Teacher";
        return view('admin.teacher.add',$data);
    }
    public function addS()
    {
        $data['header_title'] = "Add new Student";
        return view('admin.student.add',$data);
    }
    public function insertA(Request $request)
    {
        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->user_type = 1;
        $user->save();

        return redirect('admin/admin/list')->with('success', "Admin successfully Add");
    }
    public function insertT(Request $request)
    {
        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->user_type = 2;
        $user->save();

        return redirect('admin/teacher/list')->with('success', "Teacher successfully Add");
    }
    public function insertS(Request $request)
    {
        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->user_type = 3;
        $user->save();

        return redirect('admin/student/list')->with('success', "Student successfully Add");
    }
    public function editA($id)
    {
        $data['getRecordA'] = User::getSingle($id);
        if(!empty($data['getRecordA']))
        {
            $data['header_title'] = "Edit Admin";
            return view('admin.admin.edit',$data);
        }
        else
        {
            abort(404);
        }
    }
    public function editT($id)
    {
        $data['getRecordT'] = User::getSingle($id);
        if(!empty($data['getRecordT']))
        {
            $data['header_title'] = "Edit Teacher";
            return view('admin.teacher.edit',$data);
        }
        else
        {
            abort(404);
        }
    }
    public function editS($id)
    {
        $data['getRecordS'] = User::getSingle($id);
        if(!empty($data['getRecordS']))
        {
            $data['header_title'] = "Edit Student";
            return view('admin.student.edit',$data);
        }
        else
        {
            abort(404);
        }
    }
    public function updateA($id, Request $request)
    {
        $user = User::getSingle($id);
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->user_type = 1;
        $user->save();
        

        return redirect('admin/admin/list')->with('success', "Admin successfully Update");
    }
    public function updateT($id, Request $request)
    {
        $user = User::getSingle($id);
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->user_type = 2;
        $user->save();

        return redirect('admin/teacher/list')->with('success', "Teacher successfully Update");
    }
    public function updateS($id, Request $request)
    {
        $user = User::getSingle($id);
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->user_type = 3;
        $user->save();

        return redirect('admin/student/list')->with('success', "Student successfully Update");
    }
    public function deleteA($id)
    {
        $user = User::getSingle($id);
        $user -> is_delete =1;
        $user->save();

        return redirect('admin/admin/list')->with('success', "Admin successfully Deleted");
    }
    public function deleteT($id)
    {
        $user = User::getSingle($id);
        $user -> is_delete =2;
        $user->save();

        return redirect('admin/teacher/list')->with('success', "Teacher successfully Deleted");
    }
    public function deleteS($id)
    {
        $user = User::getSingle($id);
        $user -> is_delete =3;
        $user->save();

        return redirect('admin/student/list')->with('success', "Student successfully Deleted");
    }

}
