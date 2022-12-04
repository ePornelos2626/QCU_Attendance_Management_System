<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;


    protected $table = 'department';

    protected $fillable = [
        'code_dept',
        'name',
        'description'
    ];


    public function faculty()
    {
        return $this->hasMany('App\Models\Faculty', 'code_dept', 'departmentID');
    }

    
    public function courses()
    {
        return $this->hasMany('App\Models\Courses', 'id', 'deptID');
    }

    public function announcement()
    {
        return $this->hasMany('App\Models\Announcement', 'code_dept', 'departmentID');
    }


}
