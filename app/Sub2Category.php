<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Sub2Category extends Model
{
    use Notifiable;

    protected $fillable = [
        'cat_id', 'sub_i_id', 'name', 'text_color', 'background_color', 'icon', 'remark',
    ];
}
