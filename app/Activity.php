<?php

namespace App;
use  Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use AutoNumberTrait;
    protected $table = 'activitys';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'kode_activity' => [
                'format' => function(){
                    return 'EV-AB/' . date('Ymd') . '/?';
                },
                'length' => 5 
                
            ]
        ];
    }
    
    public function user()
    {
        
        return $this->belongsTo(User::class);
    }
}
