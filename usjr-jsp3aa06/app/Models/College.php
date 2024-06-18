<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    public function student(){
        return $this->hasMany(Student::class);
    }

    public function department(){
        return $this->hasMany(Department::class);
    }

    public function program(){{
        return $this->hasMany(Program::class);
    }}
}
