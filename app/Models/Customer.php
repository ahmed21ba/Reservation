<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table ='customers';
    protected $fillable=[
        'name',
        'email',
        'password',
        'phone',
        'deleted_at',

    ];

    protected  function reserve(){
        return $this->belongsTo(Reserve::class);
    }
}
