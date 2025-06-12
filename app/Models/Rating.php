<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    protected $table = 'ulasan';

    protected $fillable = ['name', 'email', 'subject', 'message'];
}

