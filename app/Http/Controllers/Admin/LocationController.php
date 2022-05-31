<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function locations() {
        $locations = Location::get()->toArray();
        // dd($locations);
        return view('admin.locations.locations')->with(compact('locations'));
    }

    public function updateLocationStatus(Request $request) {
        if($request->ajax()) {
            $data = $request->all();
            // echo "<pres>"; print_r($data); die;
            if($data['status']=="Active") {
                $status = 0;
            }
            else {
                $status = 1;
            }
            Location::where('id', $data['location_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'location_id'=>$data['location_id']]);
        }
    }

    public function deleteLocation($id) {
        Location::where('id', $id)->delete();
        $message = "Location deleted successfully";
        return redirect()->back()->with('success_message', $message);
    }

    public function addEditLocation(Request $request, $id=null) {
        if($id=="") {
            $title = "Add Location";
            $location = new Location;
            $message = "New location added successfully!";
        }
        else {
            $title = "Edit Location";
            $location = Location::find($id);
            $message = "Location updated successfully!";
        }
        if($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            $rules = [
                'location_name' => 'required|regex:/^[\pL\s\-]+$/u',
            ];
            $customMessages = [
                'location_name.required' => 'Location Name is required',
                'location_name.regex' => 'Valid Location Name is required',
            ];
            $this->validate($request, $rules, $customMessages);

            $location->name = $data['location_name'];
            $location->status = 1;
            $location->save();

            return redirect('admin/locations')->with('success_message', $message);
            
        }
        return view('admin.locations.add_edit_location')->with(compact('title', 'location'));
    }
}
