<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    
    protected $table = 'announcement';

    protected $fillable = [
        'announcementID',
        'userID',
        'accesskey',
        'subject',
        'departmentID',
        'to_user',
        'attachment'
    ];


    public static function boot()
    {
        parent::boot();
        self::created(function ($model) { 
            $model->announcementID="ANN-". date('Y') .str_pad($model->id, 7 , "0", STR_PAD_LEFT);
            $model->save();
        });
    }


    
    public function department()
    {
        return $this->belongsTo('App\Models\Department', 'departmentID', 'code_dept');
    }


}
