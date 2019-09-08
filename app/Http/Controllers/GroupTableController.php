<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GroupTableValidationRequest;
use App\Http\Requests\SubTableValidationRequest;
use App\GroupTable;
use App\SubTable;

class GroupTableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get_grouptables()
    {
        $group_table = GroupTable::with('sub_table')->get();
        return view('desktop.grouptable.index', compact('group_table'));
    }

    public function create_grouptable()
    {
        return view('desktop.grouptable.create');
    }

    public function store_grouptable(GroupTableValidationRequest $request)
    {
        $params = $request->all();
        $params['is_delete'] = $request->is_delete == 'on' ? '1' : '0';
        $group_table = GroupTable::create($params);
        toastr()->success('Create group table successfully!', 'Group table form', ['timeOut' => 1500]);
        return redirect('get-grouptables');
    }

    public function edit_grouptable($id)
    {
        $group_table = GroupTable::where('id', '=', $id)->first();
        return view('desktop.grouptable.edit', compact('group_table'));
    }

    public function update_grouptable(GroupTableValidationRequest $request, $id)
    {
        $group_table = GroupTable::where('id', '=', $id)->first();
        $params = $request->all();
        $params['is_delete'] = $request->is_delete == 'on' ? '1' : '0';
        $group_table->update($params);
        toastr()->success('Update group table successfully!', 'group table form', ['timeOut' => 1500]);
        return redirect('get-grouptables');
    }

    public function delete_grouptable($id){
        $group_table = GroupTable::where('id', '=', $id)->first();
        $group_table->delete();
        toastr()->success('Deleted group table successfully!', 'group table form', ['timeOut' => 1500]);
        return redirect('get-grouptables');
    }

//==End Group==//
//==Start Sub==//
    public function create_subtable()
    {
        return view('desktop.grouptable.subtable.create');
    }

    public function store_subtable(SubTableValidationRequest  $request)
    {
        $params = $request->all();
        $params['status'] = 'F';
        $sub_table = SubTable::create($params);
        toastr()->success('Create group table successfully!', 'Group table form', ['timeOut' => 1500]);
        return redirect('get-grouptables');
    }

    public function edit_subtable($id)
    {
        $sub_table = SubTable::where('id', '=', $id)->first();
        return view('desktop.grouptable.subtable.edit', compact('sub_table'));
    }

    public function update_subtable(SubTableValidationRequest $request, $id)
    {
        $sub_table = SubTable::where('id', '=', $id)->first();
        $params = $request->all();
        $sub_table->update($params);
        toastr()->success('Update sub table successfully!', 'sub table form', ['timeOut' => 1500]);
        return redirect('get-grouptables');
    }

    public function delete_subtable($id){
        $sub_table = SubTable::where('id', '=', $id)->first();
        $sub_table->delete();
        toastr()->success('Deleted sub table successfully!', 'sub table form', ['timeOut' => 1500]);
        return redirect('get-grouptables');
    }
}
