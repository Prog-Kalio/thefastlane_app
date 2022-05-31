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


    //Update Admin Password
    public function updateAdminPassword(Request $request) {
        // echo "<pre>"; print_r(Auth::guard('admin')->user()); die();
        if($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die();
            if(Hash::check($data['current_password'], Auth::guard('admin')->user()->password)){
                //Password check
                 if($data['current_password']==$data['new_password']) {
                    return redirect()->back()->with('error_message','New Password is same as Old Password!');
                 }
                 else if($data['confirm_password']==$data['new_password']) {
                    Admin::where('id',Auth::guard('admin')->user()->id)->update(['password'=>bcrypt($data['new_password'])]);
                    return redirect()->back()->with('success_message','Password updated successfully!');
                 }
                 else {
                     return redirect()->back()->with('error_message','New Password and Confirm password are not the same!');
                 }
            }
            else {
                return redirect()->back()->with('error_message','Please re-check the current password!');
            }
        }
        $adminDetails = Admin::where('email',Auth::guard('admin')->user()->email)->first()->toArray();
        return view('admin.settings.update_admin_password')->with(compact('adminDetails'));
    }

    //Check Admin Password
    public function checkAdminPassword(Request $request) {
        $data = $request->all();
        // echo "<pre>"; print_r($data); die;
        if(Hash::check($data['current_password'], Auth::guard('admin')->user()->password)){
            return "true";
        }
        else {
            return "false";
        }
    }

    //Update Admin Details
    public function updateAdminDetails(Request $request) {
        if($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die();
            $rules = [
                'admin_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'admin_mobile' => 'required|numeric',
            ];
            $customMessages = [
                'admin_name.required' => 'Name is required',
                'admin_name.regex' => 'Valid Name is required',
                'admin_mobile.required' => 'Mobile is required',
                'admin_mobile.numeric' => 'Valid Mobile is required',
            ];
            $this->validate($request, $rules, $customMessages);

            //Upload images
            if($request->hasFile('admin_image')) {
                $image_tmp = $request->file('admin_image');
                if($image_tmp->isValid()) {
                    // Get Image Extension 
                    $extension = $image_tmp->getClientOriginalExtension();
                    // Generate new image name
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'admin/images/photos/'.$imageName;
                    //Upload into database
                    Image::make($image_tmp)->save($imagePath);
                }
            }
            else if(!empty($data['current_admin_image'])) {
                $imageName = $data['current_admin_image'];
            }
            else {
                $imageName = "";
            }

            // Update details into database
            Admin::where('id',Auth::guard('admin')->user()->id)->update(['name'=>$data['admin_name'], 'mobile'=>$data['admin_mobile'], 'image'=>$imageName]);
            return redirect()->back()->with('success_message','Details updated successfully');
        }
        return view('admin.settings.update_admin_details');
    }


    public function admins($type=null) {
        $admins = Admin::query();
        if(!empty($type)) {
            $admins = $admins->where('type', $type);
            $title = ucfirst($type)."s";
        }
        else {
            $title = "All Admins/Subadmins/Vendors";
        }
        $admins = $admins->get()->toArray();
        // dd($admins);
        return view('admin.admins.admins')->with(compact('admins', 'title'));
    }


    public function updateAdminStatus(Request $request) {
        if($request->ajax()) {
            $data = $request->all();
            // echo "<pres>"; print_r($data); die;
            if($data['status']=="Active") {
                $status = 0;
            }
            else {
                $status = 1;
            }
            Admin::where('id', $data['admin_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'admin_id'=>$data['admin_id']]);
        }
    }


    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
