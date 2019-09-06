<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExchangeRateValidationRequest;
use App\ExchangeRate;
use App\Currency;
class ExchangeRateController extends Controller
{
    public function get_exchange(){
        $exchange = ExchangeRate::all();
        return view('desktop.exchangerates.index', compact('exchange'));
    }
    public function create_exchange(){
        $currencies = Currency::ALL();
        return view('desktop.exchangerates.create', compact('currencies'));
    }
    public function store_exchange(ExchangeRateValidationRequest $request){
        ExchangeRate::create($request->all());
        toastr()->success('Create Exchange Rate successfully!', 'Exchange Rate Form', ['timeOut' => 1500]);
        return redirect('get-exchange');
    }
}
