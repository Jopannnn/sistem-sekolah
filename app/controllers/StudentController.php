<?php

namespace App\Controller;

require_once '../app/core/controller.php';

use App\Core\Controller;

class StudentController extends Controller
{
    public function index()
    {
       $this->view('students.index');

    }





    public function create()
    {

          $this->view('students.create');

    }

    public function show($id)
    {
       
          $this->view('students.show');

    }

     public function edit($id)
     {
          
          $this->view('students.edit');
     
     }
}
    
?>