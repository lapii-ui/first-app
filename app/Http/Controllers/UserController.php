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
        $params['role'] = (int)$request->get('role');
        
        // dd($params);

        User::create($params);
        return redirect('get-profile');
    }
}
