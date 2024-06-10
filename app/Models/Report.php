<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    
    public function user()   
    {
        return $this->belongsTo(User::class);  
    }
    
    public function student()   
    {
        return $this->belongsTo(Student::class);  
    }
    
    public function replies()   
    {
        return $this->hasMany(Reply::class);  
    }

    protected $fillable = [
        'user_id',
        'student_id',
        'date',
        'subject',
        'submission',
        'attendance',
        'attendance_reason',
        'body'
    ];
}