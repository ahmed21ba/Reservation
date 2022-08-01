<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnersOfHall extends Model
{
    use HasFactory;
    protected $table ='owners_of_halls';

    protected $fillable=[
        'name',
        'email',
        'password',
        'phone',
        'deleted_at',

    ];

    protected  function halls(){
        return $this->hasMany(hall::class);
    }

    protected  function admins(){
        return $this->hasMany(admin::class);
    }

}
