<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\fees;
use DB;

class student extends Model
{
 public function feespayment(){
     return $this-hasMany('App/fees');
 }   
}
