<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;
    protected $table ="reserve";
    protected $fillable=[
        'status',
        'start_time',
        'end_time',
        'occasion',
        'hall_id',
        'customer_id',
        'created_at',
        'deleted_at',
    ];

    protected  function customer(){
        return $this->belongsTo(User::class,'customer_id');
    }

    protected  function hall(){
        return $this->belongsTo(Hall::class);
    }

    public  function occasionType($occasion){
        $occasionType = null;
        if ($occasion == 1 ) $occasionType = 'صالة افراح';
        else if  ($occasion == 2 )$occasionType = 'قاعة مؤتمرات';
        return $occasionType;
    }
}
