<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert location records into database
        $locationRecords = [
            ['id'=> 1, 'name'=> 'Abuja', 'status'=> 1],
            ['id'=> 2, 'name'=> 'Lagos', 'status'=> 1],
            ['id'=> 3, 'name'=> 'Portharcourt', 'status'=> 1]
        ];
        
        Location::insert($locationRecords);
    }
}
