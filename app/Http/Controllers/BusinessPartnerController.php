<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BusinessPartnerValidationRequest;
use App\{
    BusinessPartner,
    PriceList
};
class BusinessPartnerController extends Controller
{
    public function get_businesspartners()
    {
        $businesspartners = BusinessPartner::with('price_lists')->get();
        return view('desktop.businesspartners.index', compact('businesspartners'));
    }
    public function create_businesspartner()
    {
        $price_lists = PriceList::all();
        return view('desktop.businesspartners.create', compact('price_lists'));
    }
    public function store_businesspartner(BusinessPartnerValidationRequest $request)
    {
        $params = $request->all();
        $params['is_delete'] = $request->is_delete == 'on' ? '1' : '0';
        BusinessPartner::create($params);
        toastr()->success('Create Business Partner successfully!', 'Business Partner Form', ['timeOut' => 1500]);
        return redirect('get-businesspartners');
    }
    public function edit_businesspartner($id)
    {
        $businesspartners = BusinessPartner::where('id', '=', $id)->first();
        $price_lists = PriceList::all();
        return view('desktop.businesspartners.edit', compact('businesspartners', 'price_lists'));
    }
    public function update_businesspartner(BusinessPartnerValidationRequest $request, $id)
    {
        $businesspartners = BusinessPartner::where('id', '=', $id)->first();
        $params = $request->all();
        $params['is_delete'] = $request->is_delete == 'on' ? '1' : '0';
        $businesspartners->update($params);
        toastr()->success('Update Business Partners successfully!', 'Business Partners Form', ['timeOut' => 1500]);
        return redirect('get-businesspartners');
    }
    public function delete_businesspartner($id)
    {
        $businesspartners = BusinessPartner::where('id', '=', $id)->first();
        $businesspartners->delete();
        //toastr()->success('Deleted Business Partners successfully!', 'Business Partners form', ['timeOut' => 1500]);
        return redirect('get-businesspartners');
    }
}
