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
        $categories = Category::with('sub1_categories')->get();
        return view('desktop.categories.index', compact('categories'));
    }
    
    public function create()
    {
        return view('desktop.categories.create');
    }

    public function store(CategoryValidRequest $request)
    {
        Category::create($request->all());
        toastr()->success('Create Category successfully!', 'Category Form', ['timeOut' => 1500]);
        return redirect('category');
    }
    
    public function edit($id)
    {
        $categories = Category::where('id', '=', $id)->first();
        return view('desktop.categories.edit', compact('categories'));
    }
    
    public function update_category(CategoryValidRequest $request, $id)
    {
        $categories = Category::where('id', '=', $id)->first();
        $categories->update($request->all());

        toastr()->success('Update Category successfully!', 'Category Form', ['timeOut' => 1500]);
        return redirect('category');
    }
    
    public function delete_category($id)
    {
        $categories = Category::where('id', '=', $id)->first();
        $categories->delete();

        toastr()->success('Deleted Category successfully!', 'Category Form', ['timeOut' => 1500]);
        return redirect('category');
    }


    public function create_sub_i(){
        return view('desktop.categories.sub-i.create');
    }
    public function add_sub_i(SubIValidationRequest $request){
        Sub1Category::create($request->all());

        toastr()->success('Create Sub Category I successfully!', 'Category Form', ['timeOut' => 1500]);
        return redirect('category');
    }
    public function edit_sub_i($id)
    {
        $sub_i = Sub1Category::where('id', '=', $id)->first();
        return view('desktop.categories.sub-i.edit', compact('sub_i'));
    }
    public function update_sub_i(SubIValidationRequest $request, $id)
    {
        $sub_i = Sub1Category::where('id', '=', $id)->first();
        $sub_i->update($request->all());

        toastr()->success('Update Sub Category I successfully!', 'Category Form', ['timeOut' => 1500]);
        return redirect('category');
    }
    public function delete_sub_i($id)
    {
        $sub_i = Sub1Category::where('id', '=', $id)->first();
        $sub_i->delete();

        toastr()->success('Deleted Sub Category I successfully!', 'Category Form', ['timeOut' => 1500]);
        return redirect('category');
    }


    public function create_sub_ii(){
        return view('desktop.categories.sub-ii.create');
    }
    public function add_sub_ii(SubIIValidationRequest $request){
        Sub2Category::create($request->all());

        toastr()->success('Create Sub Category II successfully!', 'Category Form', ['timeOut' => 1500]);
        return redirect('category');
    }
    public function edit_sub_ii($id)
    {
        $sub_ii = Sub2Category::where('id', '=', $id)->first();
        return view('desktop.categories.sub-ii.edit', compact('sub_ii'));
    }
    public function update_sub_ii(SubIIValidationRequest $request, $id)
    {
        $sub_ii = Sub2Category::where('id', '=', $id)->first();
        $sub_ii->update($request->all());

        toastr()->success('Update Sub Category II successfully!', 'Category Form', ['timeOut' => 1500]);
        return redirect('category');
    }
    public function delete_sub_ii($id)
    {
        $sub_ii = Sub2Category::where('id', '=', $id)->first();
        $sub_ii->delete();

        toastr()->success('Deleted Sub Category II successfully!', 'Category Form', ['timeOut' => 1500]);
        return redirect('category');
    }
}
