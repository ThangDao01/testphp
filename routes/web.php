<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test1', function () {
    return view('user.homepage_1');
});
Route::get('/', function () {
    return view('main');
});

Route::get('/octopus/index1', function () {
    return view('admin.layout');
});
Route::get('/octopus/index', function () {
    return view('admin.index');
});
Route::get('/octopus/tables-advanced', function () {
    return view('admin.list');
});
Route::get('/octopus/forms-advanced', function () {
    return view('admin.form');
});
Route::get('/octopus/pages-calendar', function () {
    return view('admin.calendar');
});
Route::get('/octopus/ui-elements-modals', function () {
    return view('admin.ui-elements-modals');
});

//user
Route::get('/create',[UserController::class,'create']);
Route::post('/create',[UserController::class,'create_handling']);

//student
Route:: get('/student/create', [StudentController::class,'create']);
Route:: get('/student/list', [StudentController::class,'getList']);
Route:: get('/student/detail', [StudentController::class,'getById']);
Route:: get('/student/update', [StudentController::class,'update']);
Route:: get('/student/delete', [StudentController::class,'delete']);
Route:: get('/student/view', [StudentController::class,'view']);
//teacher
Route:: get('/teacher/create', [TeacherController::class,'create']);
Route:: get('/teacher/list', [TeacherController::class,'getList']);
Route:: get('/teacher/detail', [TeacherController::class,'getById']);
Route:: get('/teacher/update', [TeacherController::class,'update']);
Route:: get('/teacher/delete', [TeacherController::class,'delete']);
Route:: get('/teacher/view', [TeacherController::class,'view']);

