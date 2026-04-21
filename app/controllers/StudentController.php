<?php

namespace App\Controller;

require_once '../app/core/controller.php';
require_once '../app/models/student.php';

use App\Core\Controller;
use App\models\Student;

class StudentController extends Controller
{
      public function index()
      {
            $StudentModel = new Student();
            $students = $StudentModel->getStudents();

            $this->view('students.index', [
                  'students' => $students
            ]);

      }





      public function create()
      {

            $this->view('students.create');

      }

      public function show($id)
      {

            $id = intval($id);
            $studentModel = new Student();
            $student = $studentModel->getStudent($id);
            $this->view('students.show', [
                  'student' => $student
            ]);


      }

      public function edit($id)
      {

            $this->view('students.edit');

      }

      public function store()
      {
            $studentModel = new Student();
            $studentModel->INSERT($_POST);
      }
}

?>