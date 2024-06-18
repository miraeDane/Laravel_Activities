<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function college(){
        return $this->belongsTo(College::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }
}
