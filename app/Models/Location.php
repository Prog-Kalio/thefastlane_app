<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public static function locations() {
        $getLocations = Location::with('movie')->where('status',1)->get();
        $getLocations = json_decode(json_encode($getLocations), true);
        // echo "<pre>"; print_r($getLocations); die;
        return $getLocations;
    }

    public function movie() {
        return $this->hasMany('App\Models\Movie', 'location_id');
    }
}
