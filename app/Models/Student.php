<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name','gradeID','age','avatar','gender','grade','address','number'];

    public function grade () {
        return  $this->belongsTo(Grade::class,'gradeID');
    }
}

