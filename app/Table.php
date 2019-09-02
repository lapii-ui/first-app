<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use Notifiable;

    protected $table = 'group_tables';

    protected $fillable = [
        'name', 'type', 'remark',
    ];
}
