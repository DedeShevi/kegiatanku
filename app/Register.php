<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'registers';
    protected $guarded = [];

    public function user()
    {
        
        return $this->belongsTo(User::class);
    }

    public function activity() 
    {
        return $this->belongsTo(Activity::class);
    }
}