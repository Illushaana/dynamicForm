<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DynamicField extends Model
{
    public $table = "dynamic_fields";
    protected $fillable = [
        'nama',
    ];
}
