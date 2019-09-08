<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\ExchangeRate;

class ExchangeRate extends Model
{
    use Notifiable;
    protected $table = 'exchange_rates';
    protected $fillable = [
        'id', 'date_set', 'currency_id', 'amount', 'rate', 'default',
    ];
    public function currencies(){
        // return $this->belongTo(Currency::class, 'currency_id', 'id');
        return $this->belongsTo('App\Currency', 'currency_id', 'id');
    }
}
