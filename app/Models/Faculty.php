<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory; 

    protected $table = 'faculty';

    protected $fillable = [
        'facultyID',
        'empID',
        'userID',
        'departmentID',
        'courseID',
        'faculty_firstname',
        'faculty_middlename',
        'faculty_lastname', 
        'faculty_suffix', 
        'faculty_contact', 
        'faculty_email', 
        'faculty_permission',
        'faculty_profilepic',
        'faculty_qr'
        
    ];

    public static function boot()
    {
            parent::boot();

            self::created(function ($model) { 
                    $model->empID ="EMP-". str_pad($model->id, 9 , "0", STR_PAD_LEFT);
                $model->save();
            });

           self::created(function ($model) { 
                    $model->facultyID ="FAC-". str_pad($model->id, 9 , "0", STR_PAD_LEFT);
                $model->save();
            });
    }


    public function department()
    {
        return $this->belongsTo('App\Models\Department', 'code_dept', 'departmentID');
    }

    public function course()
    {
        return $this->hasMany('App\Models\Courses', 'code_course', 'courseID');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\Faculty', 'id', 'userID');
    }


    // public static function boot()
    // {
    //         parent::boot();
    //         self::created(function ($model) { 
    //             $model->facultyID ="FAC-". str_pad($model->id, 9 , "0", STR_PAD_LEFT);
    //            $model->save();
    //        });
    // }
    

}
