<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    //-- many to many relationship with students
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
