<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{
    UOM,
    GroupUOM
};

class UOMController extends Controller
{
    public function index()
    {
        $uom = UOM::all();
        $group_uom = GroupUOM::all();
        return view('desktop.uom.index', compact('uom', 'group_uom'));
    }
    public function create()
    {
        return view('desktop.uom.create');
    }
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|max:255']);
        $group = $request->make_group ? 1 : 0;

        UOM::create($request->all());

        if($group == 1){
            GroupUOM::create($request->all());
        }
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        return view('desktop.uom.edit');
    }
    public function update_uom(Request $request, $id)
    {
        //
    }
    public function delete_uom($id)
    {
        //
    }
}
