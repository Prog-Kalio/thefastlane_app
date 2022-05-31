<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use Image;

class MovieController extends Controller
{
    public function movies() {
        $movies = Movie::with(['location'])->get()->toArray();
        // dd($movies);
        return view('admin.movies.movies')->with(compact('movies'));
    }



    public function updateMovieStatus(Request $request) {
        if($request->ajax()) {
            $data = $request->all();
            // echo "<pres>"; print_r($data); die;
            if($data['status']=="Active") {
                $status = 0;
            }
            else {
                $status = 1;
            }
            Movie::where('id', $data['movie_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'movie_id'=>$data['movie_id']]);
        }
    }

    public function deleteMovie($id) {
        Movie::where('id', $id)->delete();
        $message = "Movie deleted successfully";
        return redirect()->back()->with('success_message', $message);
    }

    public function addEditMovie(Request $request, $id=null) {
        if($id=="") {
            $title = "Add Movie";
            $movie = new Movie;
            $message = "New movie added successfully!";
        }
        else {
            $title = "Edit Movie";
            $movie = Movie::find($id);
            $message = "Movie updated successfully!";
        }
        if($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            $rules = [
                'movie_name' => 'required',
                'movie_price' => 'required|numeric',
                'description' => 'required',
                'genre' => 'required',
                'movie_star' => 'required',
                'movie_duration' => 'required',
                'show_time' => 'required',
                'meta_title' => 'required',
                'meta_description' => 'required',
                'meta_keywords' => 'required',
            ];
            $customMessages = [
                'movie_name.required' => 'Movie Name is required',
                'movie_price.required' => 'Movie Price is required',
                'movie_price.numeric' => 'Movie Price must be numbers',
                'description.required' => 'Movie description is required',
                'genre.required' => 'Movie genre is required',
                'movie_star.required' => 'Movie Star is required',
                'movie_duration.required' => 'Movie Duration is required',
                'show_time.required' => 'Show Time is required',
                'meta_title.required' => 'Meta Title is required',
                'meta_description.required' => 'Meta Description is required',
                'meta_keywords.required' => 'Meta Keywords is required',
            ];
            $this->validate($request, $rules, $customMessages);

            //Upload images
            if($request->hasFile('movie_image')) {
                $image_tmp = $request->file('movie_image');
                if($image_tmp->isValid()) {
                    // Get Image Extension 
                    $extension = $image_tmp->getClientOriginalExtension();
                    // Generate new image name
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'admin/images/movies/'.$imageName;
                    //Upload into database
                    Image::make($image_tmp)->save($imagePath);
                }
            }
            else if(!empty($data['current_movie_image'])) {
                $imageName = $data['current_movie_image'];
            }
            else {
                $imageName = "";
            }

            $movie->location_id = $data['location_id'];
            $movie->movie_name = $data['movie_name'];
            $movie->movie_image = $imageName;
            $movie->movie_price = $data['movie_price'];
            $movie->description = $data['description'];
            $movie->genre = $data['genre'];
            $movie->movie_star = $data['movie_star'];
            $movie->movie_duration = $data['movie_duration'];
            $movie->show_time = $data['show_time'];
            $movie->meta_title = $data['meta_title'];
            $movie->meta_description = $data['meta_description'];
            $movie->meta_keywords = $data['meta_keywords'];
            $movie->status = $data['status'];
            $movie->save();

            return redirect('admin/movies')->with('success_message', $message);
            
        }
        return view('admin.movies.add_edit_movie')->with(compact('title', 'movie'));
    }
}
