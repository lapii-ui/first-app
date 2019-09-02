<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserValidationRequest;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get_user(){
        $profile = User::all();
        
        return view('desktop.profile.index', ['profile' => $profile]);
    }
    public function create(){
        return view('desktop.profile.create');
    }

    public function add_user(UserValidationRequest $request){
        $params = $request->all();
        $params['role'] = (int)$request->get('role') + 1;
        $params['password'] = bcrypt($request->password);
        
        // dd($params);

        User::create($params);
        toastr()->success('Create user successfully!', 'Create User', ['timeOut' => 1500]);

        return redirect('get-profile');
    }

    public function edit_user($id){
        $profile = User::where('id', '=', $id)->first();

        return view('desktop.profile.edit', compact('profile'));
    }

    public function update_user(UserValidationRequest $request, $id){
        $profile = User::where('id', '=', $id)->first();

        $params = $request->all();
        $params['role'] = (int)$request->get('role') + 1;
        $params['password'] = bcrypt($request->password);
        
        $profile->update($params);
        toastr()->success('Update user successfully!', 'User Form', ['timeOut' => 1500]);

        return redirect('get-profile');
    }
    
    public function delete_user($id){
        $profile = User::where('id', '=', $id)->first();

        $profile->delete();
        toastr()->success('Deleted user successfully!', 'User Form', ['timeOut' => 1500]);

        return redirect('get-profile');
    }
}
