<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Admin Login router without Admin groups
// Route::get('admin/login', 'App\Http\Controllers\Admin\AdminController@login');


Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){
    //Admin Login router with Admin groups
    Route::match(['get', 'post'], 'login', 'AdminController@login');

    Route::group(['middleware'=> ['admin']],function() {
        // Admin Dashboard Routes with admin group
        Route::get('dashboard', 'AdminController@dashboard');

        //Update Admin password
        Route::match(['get','post'],'update-admin-password', 'AdminController@updateAdminPassword');

        //Check Admin password
        Route::post('check-admin-password', 'AdminController@checkAdminPassword');

        //Update Admin details
        Route::match(['get','post'],'update-admin-details', 'AdminController@updateAdminDetails');

        //View Admin, Subadmins
        Route::get('admins/{type?}', 'AdminController@admins');

        //Update Admin Status
        Route::post('update-admin-status', 'AdminController@updateAdminStatus');

        //Admin Logout Route
        Route::get('logout', 'AdminController@logout');
    });

});
