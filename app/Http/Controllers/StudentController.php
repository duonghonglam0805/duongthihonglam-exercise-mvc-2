<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class StudentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getStudents()
    {
        $listStudent = Student::all();
        return $listStudent;
    }
    public function showStudents()
    {
        $listStudents = Student::all();
        return view('students', ['students' => $listStudents]);
    }
    public function getStudentById($id)
    {
        $listStudents = Student::all();
        foreach ($listStudents as $key => $student) {
            if ($student['id'] == $id) {
                return $student;
            }
        }
        return "Student not found";
    }
}