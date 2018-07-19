<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function users(){
        return $this->belongsToMany('App\User', 'subject_users', 'subject_id', 'user_id');
    }

    public function class(){
        return $this->belongsToMany('App\Class', 'class_subjects', 'subject_id', 'class_id');
    }
}
