<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Report;

class ReportController extends Controller
{
    public function create() {
        $user = Auth::user();
        $students = Student::where('room_id', $user->room_id)->get();
        return view('report.create')->with(['students' => $students]);
    }
    
    public function store(Request $request, Report $report) {
        $input = $request['report'];
        $report->fill($input)->save();
        return redirect('/user/' . Auth::id() . '/home');
    }
    
    public function index()
    {
        $user = Auth::user();
        $roomId = $user->room->id;

        $reports = Report::whereHas('student', function($query) use ($roomId) {
            $query->where('room_id', $roomId);
        })->orderBy('created_at', 'desc')->paginate(10);
        
        return view('report.index')->with(['reports' => $reports]);
    }}