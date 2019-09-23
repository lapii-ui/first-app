<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Bouncer;
use Auth, URL;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function uploadTempImage(Request $request){

        $validator = Validator::make($request->all(),  ['file' => 'required|mimes:jpeg,bmp,jpg,png'] );
        
        $file = $request->file('file');
        $filename = uniqid().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('temp'), $filename);

        return response([
            'success' => true,
            'url' => URL::to('temp/' . $filename),
            'filename' => $filename,
            'message' => 'File uploaded successfully'
        ]);
    }

    public function removeUploadedFile(Request $request) {

        $temp_path = public_path('temp/');
        $files = $request->filenames;

        if (!empty($files)) {
            foreach($files as $file) {
                $file_name = $file['filename'];
                unlink($temp_path.$file_name);
            }
        }
    }
}
