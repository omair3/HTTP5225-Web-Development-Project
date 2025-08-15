<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description']; // Existing from previous

    public function students()
    {
        return $this->belongsToMany(\App\Models\Student::class);
    } // Existing from Step 2

    // Add this method for one-to-one relationship
    public function professor()
    {
        return $this->belongsTo(\App\Models\Professor::class);
    }
}