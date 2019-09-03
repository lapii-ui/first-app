<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\{
    CompanyValidationRequest,
    BranchValidationRequest
};
use App\{
    Company,
    Branch,
    Warehouse
};

class CompanyController extends Controller
{
    public function index()
    {
        $company = Company::with('branches')->get();
        return view('desktop.company.index', compact('company'));
    }
    public function create()
    {
        return view('desktop.company.create');
    }

    public function store(CompanyValidationRequest $request)
    {
        $params = $request->all();
        $params['default'] = $request->default == 'on' ? '1' : '0';
        $params['remark'] = $request->remark == null ? '' : $request->remark;
        
        Company::create($params);
        toastr()->success('Create Company successfully!', 'Company Form', ['timeOut' => 1500]);
        return redirect('company');
    }
    
    public function edit($id)
    {
        $company = Company::where('id', '=', $id)->first();
        return view('desktop.company.edit', compact('company'));
    }
    
    public function update_company(CompanyValidationRequest $request, $id)
    {
        $company = Company::where('id', '=', $id)->first();
        $params = $request->all();
        $params['default'] = $request->default == 'on' ? '1' : '0';
        $params['remark'] = $request->remark == null ? '' : $request->remark;

        $company->update($params);
        toastr()->success('Update Company successfully!', 'Company Form', ['timeOut' => 1500]);
        return redirect('company');
    }
    
    public function delete_company($id)
    {
        $company = Company::where('id', '=', $id)->first();
        $company->delete();

        toastr()->success('Deleted Company successfully!', 'Company Form', ['timeOut' => 1500]);
        return redirect('company');
    }


    public function create_branch(){
        $warehouse = Warehouse::all();
        return view('desktop.company.branch.create', compact('warehouse'));
    }
    public function add_branch(BranchValidationRequest $request){
        Branch::create($request->all());

        toastr()->success('Create Branch successfully!', 'Branch Form', ['timeOut' => 1500]);
        return redirect('company');
    }
    public function edit_branch($id){
        $warehouse = Warehouse::all();
        $branch = Branch::where('id', '=', $id)->first();
        return view('desktop.company.branch.edit', compact('branch', 'warehouse'));
    }
    public function update_branch(BranchValidationRequest $request, $id){
        $branch = Branch::where('id', '=', $id)->first();
        $branch->update($request->all());

        toastr()->success('Update Branch successfully!', 'Branch Form', ['timeOut' => 1500]);
        return redirect('company');
    }
    public function delete_branch($id){
        $branch = Branch::where('id', '=', $id)->first();
        $branch->delete();

        toastr()->success('Deleted Branch successfully!', 'Branch Form', ['timeOut' => 1500]);
        return redirect('company');
    }
}
