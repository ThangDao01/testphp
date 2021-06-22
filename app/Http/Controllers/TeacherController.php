<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TeacherController extends BaseController
{
   function create(){
       return view('teacher.create');
   }
   function getList(){
       return view('teacher.getList');
   }
   function getById(){
       return view('teacher.getById');
   }
   function update(){
       return view('teacher.update');
   }
   function delete(){
       return view('teacher.delete');
   }
   function view(){
       return view('teacher.view');
   }
}
