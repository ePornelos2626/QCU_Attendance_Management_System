<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramHead extends Model
{
    use HasFactory;

  
    protected $table = 'program_head';

    protected $fillable = [
        'phID',
        'empID',
        'userID',
        'departmentID',
        'ph_firstname',
        'ph_middlename',
        'ph_lastname',
        'ph_email'

    ];


    public static function boot()
    {
        parent::boot();
        self::created(function ($model) { 
            $model->phID="PH-". date('Y') .str_pad($model->id, 7 , "0", STR_PAD_LEFT);
            $model->save();
        });
    }
}
