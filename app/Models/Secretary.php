<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretary extends Model
{
    use HasFactory;

    protected $table = 'secretary';

    protected $fillable = [

        'secID',
        'empID',
        'userID',
        'departmentID',
        'sec_firstname',
        'sec_middlename',
        'sec_lastname',
        'sec_email'

    ];

    
    public static function boot()
    {
        parent::boot();
        self::created(function ($model) { 
            $model->phID="SEC-". date('Y') .str_pad($model->id, 7 , "0", STR_PAD_LEFT);
            $model->save();
        });
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id', 'userID');
    }


}
