<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    public function subject(){
        return $this->belongsToMany('App\Subject', 'class_subjects', 'class_id', 'subject_id');
    }

    public function student(){
        return $this->belongsToMany('App\Student', 'class_students', 'class_id', 'student_id');
    }

    public function mark(){
        return $this->hasMany('App\Mark');
    }
}
