<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Lecturer;
use App\Models\Specialty;
use App\Models\Logbooks;

class Course extends Model
{
    use HasFactory;

    public function lecturer(){
        return $this->belongsTo(Lecturer::class);
    }

    public function specialty(){
        return $this->belongsTo(Specialty::class);
    }

    public function logbooks(){
        return $this->hasMany(Logbook::class);
    }




}
