<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class StudentController extends Controller
{
    public function create() {
        return view('student.create');
    }
    
    public function store(Request $request, Student $student) {
        $input = $request['student'];
        $student->fill($input)->save();
        return redirect('/user/' . Auth::id() . '/home');
    }

}