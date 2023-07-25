<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Student;
use App\Models\Logbook;

class Absence extends Model
{
    use HasFactory;

    public function student(){
        return $this->belongsTo('Student::class');
    }

    public function logbook(){
        return $this->belongsTo('Logbook::class');
    }


}
