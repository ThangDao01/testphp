<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class StudentController extends BaseController
{
   function create(){
       return view('student.create');
   }
   function getList(){
       return view('student.getList');
   }
   function getById(){
       return view('student.getById');
   }
   function update(){
       return view('student.update');
   }
   function delete(){
       return view('student.delete');
   }
   function view(){
       return view('student.view');
   }
}
