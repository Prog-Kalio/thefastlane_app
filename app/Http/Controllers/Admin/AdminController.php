<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Hash;
use Image;

class AdminController extends Controller
{
    //create dashboard function
    public function dashboard() {
        return view('admin.dashboard');
    }

    //create login function
    public function login(Request $request) {
        // echo $password = Hash::make('12345678'); die;
        if($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>";
            // print_r($data);
            // die;

            // $validated = $request->validate([
            //     'email' => 'required|email|max:255',
            //     'password' => 'required',
            // ]); 
            
            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required',
            ]; 

            $customMessages = [
                'email.required' => 'Email Address is required',
                'email.email' => 'Valid Email Address is required',
                'password.required' => 'Password is required',
            ];

            $this->validate($request, $rules, $customMessages);

            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password'], 'status'=>1])) {
                return redirect('admin/dashboard');
            }
            else{
                return redirect()->back()->with('error_message','Invalid Email or Password');
            }
        }
        return view('admin.login');
    }


    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
