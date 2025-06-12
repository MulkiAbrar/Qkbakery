<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'ulasan';

    protected $fillable = ['name', 'email', 'subject', 'message'];
}

