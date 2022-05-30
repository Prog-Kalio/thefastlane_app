<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //create dashboard function
    public function dashboard() {
        return view('admin.dashboard');
    }

    //create login function
    public function login() {
        return view('admin.login');
    }
}
