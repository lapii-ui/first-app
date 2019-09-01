<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\{
    CategoryValidRequest,
    SubIValidationRequest,
    SubIIValidationRequest
};
use App\{
    Category,
    Sub1Category,
    Sub2Category
};

class CategoriesController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        $sub_i = Sub1Category::all();
        $sub_ii = Sub2Category::all();

        return view('desktop.categories.index', compact('categories', 'sub_i', 'sub_ii'));
    }
    
    public function create()
    {
        return view('desktop.categories.create');
    }

    public function store(CategoryValidRequest $request)
    {
        Category::create($request->all());
        return redirect('category');
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy($id)
    {
        //
    }

    public function create_sub_i(){
        return view('desktop.categories.sub-i.create');
    }
    public function add_sub_i(SubIValidationRequest $request){
        Sub1Category::create($request->all());

        return redirect('category');
    }
    public function edit_sub_i($id)
    {
        //
    }
    public function update_sub_i(Request $request, $id)
    {
        //
    }
    public function delete_sub_i($id)
    {
        //
    }

    public function create_sub_ii(){
        return view('desktop.categories.sub-ii.create');
    }
    public function add_sub_ii(SubIIValidationRequest $request){
        // dd($request->all());
        Sub2Category::create($request->all());

        return redirect('category');
    }
    public function edit_sub_ii($id)
    {
        //
    }
    public function update_sub_ii(Request $request, $id)
    {
        dd($request->all());
    }
    public function delete_sub_ii($id)
    {
        //
    }
}
