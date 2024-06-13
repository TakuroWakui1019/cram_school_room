<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Timeline;
use App\Models\User;

class TimelineController extends Controller
{
    public function index(User $user) {
        // Timelineモデルの全レコードを作成日時の降順で取得
        $timelines = Timeline::orderBy('created_at', 'desc')->get();;

        return view('timeline.index')->with(['user' => $user, 'timelines' => $timelines,]);
    }
    
    public function create() {
        return view('timeline.create');
    }
    
    public function store(Request $request, Timeline $timeline) {
        $input = $request['timeline'];
        $timeline->fill($input)->save();
        return redirect('/user/'. Auth::id() . '/home');
    }
}