<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\student;
use DB;
class fees extends Model
{
    public function students(){
    return $this->belongsToMany('App/student');
    }
}
