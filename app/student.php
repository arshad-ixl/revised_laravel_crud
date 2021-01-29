<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = ['id','student_roll','student_name','student_state','student_city','student_img','updated_at','created_at'];
}
