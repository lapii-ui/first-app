<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use Notifiable;

    protected $fillable = [
        'code', 'name', 'location', 'stock_in', 'default',
    ];
}
