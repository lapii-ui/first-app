<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PriceListValidationRequest;
use App\{
    PriceList,
    Currency
};
class PriceListController extends Controller
{
    public function get_pricelists()
    {
        $price_lists = PriceList::all();
        return view('desktop.pricelists.index', compact('price_lists'));
    }
    public function create_pricelist()
    {
        $currencies = Currency::all();
        return view('desktop.pricelists.create', compact('currencies'));
    }
    public function store_pricelist(PriceListValidationRequest $request){
        $params = $request->all();
        $params['is_delete'] = $request->is_delete == 'on' ? '1' : '0';
        PriceList::create($params);
        toastr()->success('Create Price List successfully!', 'Price List Form', ['timeOut' => 1500]);
        return redirect('get-pricelists');
    }
    public function edit_pricelist($id)
    {
        $price_lists = PriceList::where('id', '=', $id)->first();
        $currencies = Currency::all();
        return view('desktop.pricelists.edit', compact('price_lists', 'currencies'));
    }
    public function update_pricelist(PriceListValidationRequest $request, $id)
    {
        $price_lists = PriceList::where('id', '=', $id)->first();
        $params = $request->all();
        $params['is_delete'] = $request->is_delete == 'on' ? '1' : '0';
        $price_lists->update($params);
        toastr()->success('Update Price List successfully!', 'Price List Form', ['timeOut' => 1500]);
        return redirect('get-pricelists');
    }
    public function delete_pricelist($id)
    {
        $price_lists = PriceList::where('id', '=', $id)->first();
        $price_lists->delete();
        toastr()->success('Deleted Price List successfully!', 'Price List form', ['timeOut' => 1500]);
        return redirect('get-pricelists');
    }
}
