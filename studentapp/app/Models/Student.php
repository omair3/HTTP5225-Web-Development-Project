<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['fname', 'lname', 'email']; 

    
    public function courses()
    {
        return $this->belongsToMany(\App\Models\Course::class);
    }
}