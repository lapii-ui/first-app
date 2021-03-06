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
        $currencies = Currency::all();
        return view('desktop.exchangerates.edit', compact('exchange', 'currencies'));
    }
    public function update_exchange(ExchangeRateValidationRequest $request, $id)
    {
        $exchange = ExchangeRate::where('id', '=', $id)->first();
        $params = $request->all();
        $params['default'] = $request->default == 'on' ? '1' : '0';
        $exchange->update($params);
        toastr()->success('Update exchange successfully!', 'Exchange Form', ['timeOut' => 1500]);
        return redirect('get-exchange');
    }
    public function delete_exchange($id)
    {
        $exchange = ExchangeRate::where('id', '=', $id)->first();
        $exchange->delete();
        toastr()->success('Deleted exchange successfully!', 'Exchange form', ['timeOut' => 1500]);
        return redirect('get-exchange');
    }
}
