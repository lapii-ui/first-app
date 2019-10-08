<?php

use Illuminate\Database\Seeder;
use App\Currency;
class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::create([
            'name' => 'Riel',
            'symbols' => '(R)'
        ]);
        Currency::create([
            'name' => 'Dollar',
            'symbols' => '($)'
        ]);
        Currency::create([   
            'name' => 'Euro',        
            'symbols' => '(€)'
        ]);
        Currency::create([
            'name' => 'Yuan',
            'symbols' => '(¥)'
        ]);
        Currency::create([
            'name' => 'Thailand',
            'symbols' => '(฿)'
        ]);
        Currency::create([
            'name' => 'Vietnam',
            'symbols' => '(₫)'
        ]);
        Currency::create([
            'name' => 'Russia',
            'symbols' => '(₽)'
        ]);
        Currency::create([
            'name' => 'Philippines',
            'symbols' => '(₱)'
        ]);
        Currency::create([
            'name' => 'Qata',
            'symbols' => '(﷼)'
        ]);
    }
}
