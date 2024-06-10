<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    public function users()   
    {
        return $this->hasMany(User::class);  
    }
    
    public function students()   
    {
        return $this->hasMany(Student::class);  
    }

    protected $fillable = ['name'];
}