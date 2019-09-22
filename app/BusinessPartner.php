<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class BusinessPartner extends Model
{
    use Notifiable;
    protected $table = "business_partners";
    protected $fillable = [
        'id', 'price_list_id', 'code', 'name', 'type', 'image', 'phone', 'mobile', 'email', 'location', 'is_delete',
    ];
    public function price_lists(){
        return $this->belongsTo('App\PriceList', 'price_list_id', 'id');
    }
}
