<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Input Records for SuperAdmin, Admin and Vendor
        $adminRecords = [
            ['id'=>1, 'name'=>'Super Admin','type'=>'superadmin', 'mobile'=>'08186705771', 'email'=>'superadmin@thefastlane.com.ng', 'password'=>'$2a$12$hAYBil.osKyWkzxehs0i/eGNzcsWgdlBuUo3sxHV.PwhXX92UvFiG', 'image'=>'', 'status'=>1],

            ['id'=>2, 'name'=>'Admin','type'=>'admin', 'mobile'=>'08186705772', 'email'=>'admin@thefastlane.com.ng', 'password'=>'$2a$12$hAYBil.osKyWkzxehs0i/eGNzcsWgdlBuUo3sxHV.PwhXX92UvFiG', 'image'=>'', 'status'=>1],

            ['id'=>3, 'name'=>'Sub Admin','type'=>'subadmin', 'mobile'=>'08186705773', 'email'=>'subadmin@thefastlane.com.ng', 'password'=>'$2a$12$hAYBil.osKyWkzxehs0i/eGNzcsWgdlBuUo3sxHV.PwhXX92UvFiG', 'image'=>'', 'status'=>1],
        ]; 
        Admin::insert($adminRecords);
    }
}
