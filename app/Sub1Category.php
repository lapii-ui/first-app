<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Sub1Category extends Model
{
    use Notifiable;

    protected $fillable = [
        'cat_id', 'name', 'text_color', 'background_color', 'icon', 'remark',
    ];
}
