<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    
    protected $table = 'course';

    protected $fillable = [
        'code_course',
        'deptID',
        'name',
        'description'
    ];


    public function faculty()
    {
        return $this->hasMany('App\Models\Faculty', 'code_course', 'courseID');
    }

        
    public function courses()
    {
        return $this->belongsTo('App\Models\Department', 'id', 'deptID');
    }
    
}
