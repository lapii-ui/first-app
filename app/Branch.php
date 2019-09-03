<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'company_id', 'warehouse_id', 'location',
    ];
}
