<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class SubTable extends Model
{
    use Notifiable;
    protected $table = 'tables';
    protected $fillable = [
        'id', 'group_id', 'name', 'status', 'remark',
    ];
}
