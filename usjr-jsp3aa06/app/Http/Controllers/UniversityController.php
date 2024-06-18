<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Department;
use App\Models\Program;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class UniversityController extends Controller
{
    public function showStudents(Student $student): View{
        return view('students.all', compact('student'));
    }

    public function showStudent(Student $id): View{
        return view('students.student', ['student'=>Student::findOrFail($id)]);
    }

    public function showColleges(College $college): View{
        return view('colleges.all', compact('college'));
    }

    public function showCollege(College $id): View{
        return view('colleges.college', ['college'=>College::findOrFail($id)]);
    }

    public function showDepartment(Department $department ): View{
        return view('departments.all', compact('department'));
    }
}
