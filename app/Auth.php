<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    protected $fillable = [
      'tel', 'hashcode'
    ];
}
