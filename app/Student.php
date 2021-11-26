<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'user_id','nisn','gender','religion','major','class',
        'phone','status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}