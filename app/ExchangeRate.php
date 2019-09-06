<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ExchangeRate extends Model
{
    use Notifiable;
    protected $table = 'exchange_rates';
    protected $fillable = [
        'id', 'date_set', 'currency', 'currency_sign', 'amount', 'rate', 'default',
    ];
    public function currency(){
        return $this->belongsTo('App\Currency');
    }
}
