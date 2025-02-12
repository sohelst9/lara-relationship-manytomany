<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    //-- many to many relationship with courses
    public function courses(){
        return $this->belongsToMany(Course::class);
    }
}
