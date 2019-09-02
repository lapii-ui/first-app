<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WarehouseValidationRequest;
use App\Warehouse;

class WarehouseController extends Controller
{
    public function get_warehouse(){
        $warehouse = Warehouse::all();

        return view('desktop.warehouse.index', compact('warehouse'));
    }
    public function create_warehouse(){
        return view('desktop.warehouse.create');
    }
    public function add_warehouse(WarehouseValidationRequest $request){
        $params = $request->all();
        $params['default'] = $request->default == 'on' ? '1' : '0';
        
        $warehouse = Warehouse::create($params);
        toastr()->success('Create warehouse successfully!', 'Warehouse Form', ['timeOut' => 1500]);

        return redirect('get-warehouse');
    }
    public function edit_warehouse($id){
        $warehouse = Warehouse::where('id', '=', $id)->first();

        return view('desktop.warehouse.edit', compact('warehouse'));
    }

    public function update_warehouse(WarehouseValidationRequest $request, $id){
        $warehouse = Warehouse::where('id', '=', $id)->first();
        $params = $request->all();
        $params['default'] = $request->default == 'on' ? '1' : '0';

        $warehouse->update($params);
        toastr()->success('Update warehouse successfully!', 'Warehouse Form', ['timeOut' => 1500]);

        return redirect('get-warehouse');
    }
    public function delete_warehouse($id){
        $warehouse = Warehouse::where('id', '=', $id)->first();

        $warehouse->delete();
        toastr()->success('Deleted warehouse successfully!', 'Warehouse Form', ['timeOut' => 1500]);

        return redirect('get-warehouse');
    }
}
