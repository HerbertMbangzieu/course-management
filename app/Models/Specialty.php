<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Course;
use App\Models\Student;

class Specialty extends Model
{
    use HasFactory;

    public function courses(){
        return $this->hasMany(Course::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }


}
