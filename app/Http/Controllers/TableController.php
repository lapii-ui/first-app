<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TableValidationRequest;
use App\Table;
class TableController extends Controller
{

    public function get_grouptable(){
        $group_table = Table::all();
        return view('desktop.table.index', compact('group_table'));
    }

    public function create_grouptable(){
        return view('desktop.table.create');
    }

    public function add_grouptable(TableValidationRequest $request){
        $params = $request->all();
        Table::create($params);
        toastr()->success('Create group table successfully!', 'Create Table', ['timeOut' => 1300]);
        return redirect('get-grouptable');
    }

    public function edit_grouptable($id){
        $params = Table::where('id', '=', $id)->first();
        return view('desktop.table.edit', compact('params'));
    }

    public function update_grouptable(TableValidationRequest $request, $id){
        return redirect('get-grouptable');
    }
}
