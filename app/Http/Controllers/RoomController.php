<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function create() {
        return view('room.create');
    }
    
    public function store(Request $request, Room $room) {
        $input = $request['room'];
        $room->fill($input)->save();
        return redirect('/room/' . $room->id . '/show');
    }
    
    public function show(Room $room) {
        return view('room.show')->with(['room' => $room]);
    }
}