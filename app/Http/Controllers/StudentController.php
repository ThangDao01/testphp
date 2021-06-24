<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class StudentController extends BaseController
{
   public function create(){
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
