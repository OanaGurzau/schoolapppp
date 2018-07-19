<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    public function class(){
        return $this->belongsTo('App\Class')
    }

    public function student(){
        return $this->belongsTo('App\Student')
    }
}
