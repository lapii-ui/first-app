<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $profile = User::all();
        
        return view('desktop.profile.index', ['profile' => $profile]);
    }
}
