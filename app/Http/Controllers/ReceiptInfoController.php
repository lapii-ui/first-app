<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReceiptInfoValidationRequest;
use App\ReceiptInfo;
class ReceiptInfoController extends Controller
{
    public function get_receipt()
    {
        $receipts = ReceiptInfo::all();
        return view('desktop.receiptsinfo.index', compact('receipts'));
    }
    public function create_receipt()
    {
        return view('desktop.receiptsinfo.create');
    }
    public function store_receipt(ReceiptInfoValidationRequest $request)
    {
        $params = $request->all();
        ReceiptInfo::create($params);
        toastr()->success('Create Receipt Information successfully !', 'Receipt Information Form', ['timeOut'=>1500]);
        return redirect('get-receipts');
    }
    public function edit_receipt($id)
    {
        $receipts = ReceiptInfo::where('id', '=', $id)->first();
        return view('desktop.receiptsinfo.edit', compact('receipts'));
    }
    public function update_receipt(ReceiptInfoValidationRequest $request ,$id)
    {
        $receipts = ReceiptInfo::where('id', '=', $id)->first();
        $params = $request->all();
        $receipts->update($params);
        toastr()->success('Update receipts successfully!', 'Receipts Form', ['timeOut' => 1500]);
        return redirect('get-receipts');
    }
    public function delete_receipt($id)
    {
        $receipts = ReceiptInfo::where('id', '=', $id)->first();
        $receipts->delete();
        toastr()->success('Deleted receipts successfully!', 'Receipts form', ['timeOut' => 1500]);
        return redirect('get-receipts');
    }
}
