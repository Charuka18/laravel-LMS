<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\MarksController;

Route::get('/', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'AuthLogin']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('forgot-password', [AuthController::class, 'forgotpassword']);
Route::post('forgot-password', [AuthController::class, 'PostForgotPassword']);
Route::get('reset/{token}', [AuthController::class, 'reset']);
Route::post('reset/{token}', [AuthController::class, 'PostReset']);



Route::group(['middleware'=> 'admin'], function(){
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/admin/list', [AdminController::class, 'listA']);
    Route::get('admin/teacher/list', [AdminController::class, 'listT']);
    Route::get('admin/student/list', [AdminController::class, 'listS']);
    Route::get('admin/admin/add', [AdminController::class, 'addA']);
    Route::get('admin/teacher/add', [AdminController::class, 'addT']);
    Route::get('admin/student/add', [AdminController::class, 'addS']);
    Route::post('admin/admin/add', [AdminController::class, 'insertA']);
    Route::post('admin/teacher/add', [AdminController::class, 'insertT']);
    Route::post('admin/student/add', [AdminController::class, 'insertS']);
    Route::get('admin/admin/edit/{id}', [AdminController::class, 'editA']);
    Route::get('admin/teacher/edit/{id}', [AdminController::class, 'editT']);
    Route::get('admin/student/edit/{id}', [AdminController::class, 'editS']);
    Route::post('admin/admin/edit/{id}', [AdminController::class, 'updateA']);
    Route::post('admin/teacher/edit/{id}', [AdminController::class, 'updateT']);
    Route::post('admin/student/edit/{id}', [AdminController::class, 'updateS']);
    Route::get('admin/admin/delete/{id}', [AdminController::class, 'deleteA']);
    Route::get('admin/teacher/delete/{id}', [AdminController::class, 'deleteT']);
    Route::get('admin/student/delete/{id}', [AdminController::class, 'deleteS']);

    //class url
    Route::get('admin/class/list', [ClassController::class, 'list']);
    Route::get('admin/class/add', [ClassController::class, 'add']);
    Route::post('admin/class/add', [ClassController::class, 'insert']);
    Route::get('admin/class/edit/{id}', [ClassController::class, 'edit']);
    Route::post('admin/class/edit/{id}', [ClassController::class, 'update']);
    Route::get('admin/class/delete/{id}', [ClassController::class, 'delete']);

    //marks
    Route::get('admin/marks/list', [MarksController::class, 'list']);
    Route::get('admin/marks/add', [MarksController::class, 'add']);
    Route::post('admin/marks/add', [MarksController::class, 'insert']);
    Route::get('admin/marks/edit/{id}', [MarksController::class, 'edit']);
    Route::post('admin/marks/edit/{id}', [MarksController::class, 'update']);
    Route::get('admin/marks/delete/{id}', [MarksController::class, 'delete']);


});
Route::group(['middleware'=> 'teacher'], function(){
    Route::get('teacher/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('teacher/admin/list', [TeacherController::class, 'listA']);
    Route::get('teacher/teacher/list', [TeacherController::class, 'listT']);
    Route::get('teacher/student/list', [TeacherController::class, 'listS']);

    //class url
    Route::get('teacher/class/list', [TeacherController::class, 'list']);
    Route::get('teacher/class/add', [TeacherController::class, 'add']);
    Route::post('teacher/class/add', [TeacherController::class, 'insert']);
    Route::get('teacher/class/edit/{id}', [TeacherController::class, 'edit']);
    Route::post('teacher/class/edit/{id}', [TeacherController::class, 'update']);
    Route::get('teacher/class/delete/{id}', [TeacherController::class, 'delete']);

    //marks
    Route::get('teacher/marks/list', [MarksController::class, 'list']);
    Route::get('teacher/marks/add', [MarksController::class, 'add']);
    Route::post('teacher/marks/add', [MarksController::class, 'insert']);
    Route::get('teacher/marks/edit/{id}', [MarksController::class, 'edit']);
    Route::post('teacher/marks/edit/{id}', [MarksController::class, 'update']);
    Route::get('teacher/marks/delete/{id}', [MarksController::class, 'delete']);

});
Route::group(['middleware'=> 'student'], function(){
    Route::get('student/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('student/teacher/list', [StudentController::class, 'listT']);

    //class url
    Route::get('student/class/list', [StudentController::class, 'list']);
    
    //marks
    Route::get('student/marks/list', [MarksController::class, 'list']);
});