<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TableValidationRequest;
use App\Table;
class TableController extends Controller
{
    //group Table
    public function get_grouptable(){
        $grouptable = Table::all();
        return view('desktop.table.index', compact('grouptable'));
    }

    public function create_grouptable(){
        return view('desktop.table.create');
    }

    public function add_grouptable(TableValidationRequest $request){
        $params = $request->all();
        $grouptable = Table::create($params);
        toastr()->success('Create group table successfully!', 'Create Table', ['timeOut' => 1300]);
        return redirect('get-grouptable');
    }

    public function edit_grouptable($id){
        $grouptable = Table::where('id', '=', $id)->first();
        return view('desktop.table.edit', compact('grouptable'));
    }

    public function update_grouptable(TableValidationRequest $request, $id){
        $grouptable = Table::where('id', '=', $id)->first();
        $params = $request->all();
        $grouptable->update($params);
        toastr()->success('Update group table successfully!', 'group table Form', ['timeOut' => 1500]);

        return redirect('get-grouptable');
    }
    //Close group table
    public function create_subtable(){
        return view('desktop.table.sub-table.create');
    }
}
