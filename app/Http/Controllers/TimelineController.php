<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timeline;
use App\Models\User;

class TimelineController extends Controller
{
    public function index(User $user) {
        // Timelineモデルの全レコードを作成日時の降順で取得
        $timelines = Timeline::orderBy('created_at', 'desc')->get();
        
        return view('timeline.index')->with(['user' => $user, 'timelines' => $timelines]);
    }
}