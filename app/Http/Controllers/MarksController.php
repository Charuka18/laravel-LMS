<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\MarksModel;

class MarksController extends Controller
{
    public function list()
    {
        $data['getRecordm'] = MarksModel::getRecordm();
        $data['header_title'] = "Class List";
        return view('teacher.marks.list', $data);
    }
    public function add()
    {
        $data['header_title'] = "Add new Class";
        return view('teacher.marks.add',$data);
    }
    public function insert(Request $request)
    {
        $save = new MarksModel;
        $save->name = $request->name;
        $save->subject = $request->subject;
        $save->marks = $request->marks;
        $save->created_by = Auth::user()->id;
        $save->save();

        return redirect('teacher/marks/list')->with('success', "Class successfully Add");
    }
    public function edit($id)
    {
        $data['getRecordm'] = MarksModel::getSinglem($id);
        if(!empty($data['getRecordm']))
        {
            $data['header_title'] = "Edit Class";
            return view('teacher.marks.edit',$data);
        }
        else
        {
            abort(404);
        }
    }
    public function update($id, Request $request)
    {
        $save = MarksModel::getSinglem($id);
        $save->name = $request->name;
        $save->subject = $request->subject;
        $save->marks = $request->marks;
        $save->created_by = Auth::user()->id;
        $save->save();

        return redirect('teacher/marks/list')->with('success', "Class successfully Update");
    }
    public function delete($id)
    {
        $save = MarksModel::getSinglem($id);
        $save -> is_delete =1;
        $save->save();

        return redirect('teacher/marks/list')->with('success', "Class successfully Deleted");
    }
}
