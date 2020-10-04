<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = ['teacherID','name','maxNumber'];

    public function teacher () {
        return $this->belongsTo(Teacher::class,'teacherID');
    }
    public function students() {
        return $this->hasMany(Student::class,'gradeID');
    }
    public function GradeNum () {

    }
}

