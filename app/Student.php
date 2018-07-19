<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function classes(){
        return $this->belongsToMany('App\Class', 'class_students', 'student_id', 'class_id');
    }

    public function mark(){
        return $this->hasMany('App\Mark');
    }
}
