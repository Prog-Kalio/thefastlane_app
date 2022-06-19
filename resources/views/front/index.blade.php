@extends('front.frontlayout.front_layout')

@section('content')

    <div class="container-fluid bg-light">
        <?php 
            use App\Models\Location;
            $locations = Location::locations();
            // echo "<pre>"; print_r($locations); die;  
        ?>
        <h4>Movie Premier </h4>

        <div class="row flex-row d-flex justify-content-around align-items-center bg-dark text-muted p-4">
            @foreach($locations as $location)
            <div class="col-md-4 card flex text-justify">
                <div>
                    <div class="text-center p-3"><img class="img-fluid" src="{{ asset('admin/images/movies/'.$location['movie'][0]['movie_image']) }}"></div>
                    <h5>Movie name: {{ $location['movie'][0]['movie_name'] }} </h5>
                    <div><small>Price: {{ $location['movie'][0]['movie_price'] }} </small></div>
                    <div><small>Duration: {{ $location['movie'][0]['movie_duration'] }} </small></div>
                    <div><small>Location: {{ $location['name'] }} </small></div>
                    <div><small>Show Time: {{ $location['movie'][0]['show_time'] }} </small></div>
                    <div><small>Description: {{ $location['movie'][0]['description'] }} </small></div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="row flex-row d-flex justify-content-around align-items-center bg-dark text-muted p-4">
            @foreach($locations as $location)
            <div class="col-md-4 card flex text-justify">
                <div>
                    <div class="text-center p-3"><img class="img-fluid" src="{{ asset('admin/images/movies/'.$location['movie'][1]['movie_image']) }}"></div>
                    <h5>Movie name: {{ $location['movie'][1]['movie_name'] }} </h5>
                    <div><small>Price: {{ $location['movie'][1]['movie_price'] }} </small></div>
                    <div><small>Duration: {{ $location['movie'][1]['movie_duration'] }} </small></div>
                    <div><small>Location: {{ $location['name'] }} </small></div>
                    <div><small>Show Time: {{ $location['movie'][1]['show_time'] }} </small></div>
                    <div><small>Description: {{ $location['movie'][1]['description'] }} </small></div>
                </div>
            </div>
            @endforeach
        </div>

        <div><a href="{{ url('/admin/login')}}"><b><i><small class="text-danger">Admin Login</small></i></b></a></div>
    </div>

@endsection