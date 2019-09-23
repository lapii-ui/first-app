<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PriceList extends Model
{
    use Notifiable;
    protected $table = "price_lists";
    protected $fillable = [
        'id', 'name', 'currency_id', 'is_delete',
    ];
    public function currencies(){
        return $this->belongsTo('App\Currency', 'currency_id', 'id');
    }
}
