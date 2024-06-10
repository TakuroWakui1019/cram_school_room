<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    public function room()   
    {
        return $this->belongsTo(Room::class);  
    }
    
    public function reports()   
    {
        return $this->hasMany(Report::class);  
    }

    protected $fillable = [
        'room_id',
        'name',
        'grade'
    ];

}