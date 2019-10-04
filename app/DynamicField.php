<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DynamicField extends Model
{
    protected $fillable = [
        'nama', 'username', 'password', 'email', 'phone', 'occupation'
    ];
}
