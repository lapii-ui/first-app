<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warehouse;

class WarehouseController extends Controller
{
    public function get_warehouse(){
        $warehouse = Warehouse::all();

        return view('desktop.warehouse.index', compact('warehouse'));
    }
}
