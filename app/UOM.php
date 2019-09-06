<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UOM extends Model
{
    protected $table = 'uoms';
    protected $fillable = [
        'code', 'name', 'is_delete',
    ];
}
