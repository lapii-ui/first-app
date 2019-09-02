<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'phone1', 'phone2', 'email', 'address', 'logo', 'currency_id', 'default', 'remark',
    ];

    public function branches() {
        return $this->hasMany(Branch::class);
    }
}
