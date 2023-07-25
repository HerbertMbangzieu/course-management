<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Specialty;

class Student extends Model
{
    use HasFactory;

    public function specialty(){
        return $this->belongsTo(Specialty::class);
    }
}
