<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //
    protected $table = 'books';

    protected $fillable = [
        'title',
        'description',
        'author_id'
    ];

    public function author(){
        return $this->belongsTo(Authors::class);
    }

    }




