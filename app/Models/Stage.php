<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'cv', 'certificat', 'message'];
}
