<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name','number','age','salary','address','gender','position'];
    use HasFactory;

    public function grade (){
        return $this->hasOne(Grade::class);
    }
    public function TName ($id) {
            $name = $this->find($id)->name;
            return $name;
    }
}

