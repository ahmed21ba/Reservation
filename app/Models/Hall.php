<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;
    protected $table ='halls';



    protected $fillable=[
        'name',
        'address',
        'description',
        'phone',
        'governorate_id',
        'price',
        'whatsapp',
        'image',
        'owner_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];




      function governorate(){
        return $this->belongsTo(Governorate::class);
    }

    function owner(){
        return $this->belongsTo(User::class,'owner_id');
    }

    protected  function reserves(){
        return $this->hasMany(reserve::class);
    }
}
