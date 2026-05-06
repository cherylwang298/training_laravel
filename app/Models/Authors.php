<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    //

    protected $table = 'authors';

    protected $fillable = [
        'name',
        'email'
    ];

    public function books(){
        return $this->hasMany(Books::class);
    }

    }

