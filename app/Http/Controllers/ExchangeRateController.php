<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExchangeRateValidationRequest;
use App\{
    ExchangeRate,
    Currency
};
class ExchangeRateController extends Controller
{
    public function get_exchange(){
        $exchange = ExchangeRate::with('currencies')->get();
        return view('desktop.exchangerates.index', compact('exchange'));
    }
    public function create_exchange(){
        $currencies = Currency::all();
        return view('desktop.exchangerates.create', compact('currencies'));
    }
    public function store_exchange(ExchangeRateValidationRequest $request){
        $params = $request->all();
        $params['default'] = $request->default == 'on' ? '1' : '0';
        ExchangeRate::create($params);
        toastr()->success('Create Exchange Rate successfully!', 'Exchange Rate Form', ['timeOut' => 1500]);
        return redirect('get-exchange');
    }
    public function edit_exchange($id)
    {
        $exchange = ExchangeRate::where('id', '=', $id)->first();
        return view('desktop.exchangerates.edit', compact('exchange'));
    }
}
