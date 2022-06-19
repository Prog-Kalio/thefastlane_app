@extends('admin.layout.layout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Movies</h4>
                       <a href="{{ url('admin/add-edit-movie') }}"><button class="font-weight-light small-text mb-0 btn-success">
                            Add Movies
                        </button>
                        </a>
                        @if(Session::has('success_message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success: </strong> {{ Session::get('success_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif
                        <div class="table-responsive pt-3">
                            <table id="movies" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Location
                                        </th>
                                        <th>
                                            Movie Name
                                        </th>
                                        <th>
                                            Show Time
                                        </th>
                                        <th>
                                            Movie Price
                                        </th>
                                        <th>
                                            Genre
                                        </th>
                                        <th>
                                            Duration
                                        </th>
                                        <th>
                                            Image
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($movies as $movie)
                                    <tr>
                                        <td>
                                            {{ $movie['id'] }}
                                        </td>
                                        <td>
                                            {{ $movie['location']['name'] }}
                                        </td>
                                        <td>
                                            {{ $movie['movie_name'] }}
                                        </td>
                                        <td>
                                            {{ $movie['show_time'] }}
                                        </td>
                                        <td>
                                            {{ $movie['movie_price'] }}
                                        </td>
                                        <td>
                                            {{ $movie['genre'] }}
                                        </td>
                                        <td>
                                            {{ $movie['movie_duration'] }}
                                        </td>
                                        <td>
                                            <img src="{{ asset('admin/images/movies/'.$movie['movie_image']) }}">
                                        </td>
                                        <td>
                                            @if($movie['status']==1)
                                              <a class="updateMovieStatus" id="movie-{{ $movie['id'] }}" movie_id="{{ $movie['id'] }}" href="javascript:void(0)"><i style="font-size:25px" class="mdi mdi-bookmark-check" status="Active"></i></a>
                                            @else
                                              <a class="updateMovieStatus" id="movie-{{ $movie['id'] }}" movie_id="{{ $movie['id'] }}" href="javascript:void(0)"><i style="font-size:25px" class="mdi mdi-bookmark-outline" status="Inactive"></i></a>
                                            @endif
                                        </td>
                                        <td>
                                              <a href="{{ url('admin/add-edit-movie/'.$movie['id']) }}"><i style="font-size:25px; color: #215123;" class="mdi mdi-pencil-box"></i></a>
                                              <?php /* <a title="Movie" class="confirmDelete" href="{{ url('admin/delete-movie/'.$movie['id']) }}"><i style="font-size:25px; color: #e0240a;" class="mdi mdi-file-excel-box"></i></a> */ ?>
                                              <a href="javascript:void(0)" class="confirmDelete" module="movie" moduleid="{{ $movie['id'] }}"><i style="font-size:25px; color: #e0240a;" class="mdi mdi-file-excel-box"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach;
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    @include('admin.layout.footer')   
    <!-- partial -->
</div>
<!-- main-panel ends -->
@endsection