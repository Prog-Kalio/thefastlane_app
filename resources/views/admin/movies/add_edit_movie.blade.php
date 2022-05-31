@extends('admin.layout.layout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Insertions</h3>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{ $title }}</h4>
                  @if(Session::has('error_message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Error: </strong> {{ Session::get('error_message') }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  @endif
                  @if(Session::has('success_message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success: </strong> {{ Session::get('success_message') }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  @endif
                  @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  @endif
                  <form class="forms-sample" @if(empty($movie['id'])) action="{{ url('admin/add-edit-movie') }}" @else action="{{ url('admin/add-edit-movie/'.$movie['id']) }}" @endif method="post" name="updateMovieForm" id="updateMovieForm" enctype="multipart/form-data">@csrf
                    <div class="form-group">
                      <label for="movie_name">Movie Name</label>
                      <input type="text" class="form-control" id="movie_name" name="movie_name" placeholder="Movie Name" value="{{ $movie['movie_name'] }}" required>
                    </div>
                    <div class="form-group">
                      <label for="location_id">Location ID</label>
                      <input type="text" class="form-control" id="location_id" name="location_id" placeholder="location_id" value="{{ $movie['location_id'] }}" required>
                    </div>
                    <div class="form-group">
                      <label for="movie_image">Movie Image</label>
                      <input type="file" class="form-control" id="movie_image" name="movie_image" placeholder="Movie image" value="{{ $movie['movie_image'] }}" required>
                      @if(!empty($movie['movie_image']))
                        <a target="_blank" href="{{ url('admin/images/movies/'.$movie['movie_image']) }}"><small>View Image</small></a>
                        <input type="hidden" name="current_movie_image" value="{{ $movie['movie_image'] }}">
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="movie_price">Movie Price</label>
                      <input type="text" class="form-control" id="movie_price" name="movie_price" placeholder="Movie price" value="{{ $movie['movie_price'] }}" required>
                    </div>
                    <div class="form-group">
                      <label for="description">Movie description</label>
                      <input type="text" class="form-control" id="description" name="description" placeholder="Movie description" value="{{ $movie['description'] }}" required>
                    </div>
                    <div class="form-group">
                      <label for="genre">Movie genre</label>
                      <input type="text" class="form-control" id="genre" name="genre" placeholder="Movie genre" value="{{ $movie['genre'] }}" required>
                    </div>
                    <div class="form-group">
                      <label for="movie_star">Movie Star</label>
                      <input type="text" class="form-control" id="movie_star" name="movie_star" placeholder="Movie star" value="{{ $movie['movie_star'] }}" required>
                    </div>
                    <div class="form-group">
                      <label for="movie_duration">Movie duration</label>
                      <input type="text" class="form-control" id="movie_duration" name="movie_duration" placeholder="Movie duration" value="{{ $movie['movie_duration'] }}" required>
                    </div>
                    <div class="form-group">
                      <label for="meta_title">Meta title</label>
                      <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta title" value="{{ $movie['meta_title'] }}" required>
                    </div>
                    <div class="form-group">
                      <label for="meta_description">Meta description</label>
                      <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Meta description" value="{{ $movie['meta_description'] }}" required>
                    </div>
                    <div class="form-group">
                      <label for="meta_keywords">Meta keywords</label>
                      <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Meta keywords" value="{{ $movie['meta_keywords'] }}" required>
                    </div>
                    <div class="form-group">
                      <label for="status">Status</label>
                      <input type="text" class="form-control" id="status" name="status" placeholder="Status" value="{{ $movie['status'] }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('admin.layout.footer')       
    <!-- partial -->
</div>
@endsection