<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DefineUOM extends Model
{
    protected $table = 'group_define_uoms';
    protected $fillable = [
        'uom_id', 'group_uom_id', 'alt_qty', 'operator', 'base_qty', 'is_delete',
    ];
}
