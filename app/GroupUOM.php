<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupUOM extends Model
{
    protected $table = 'group_uoms';
    protected $fillable = [
        'code', 'name', 'is_delete',
    ];
}
