<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'text_color', 'background_color', 'icon', 'remark',
    ];

    public function sub1_categories() {
        return $this->hasMany(Sub1Category::class, 'cat_id', 'id');
    }
    
}
