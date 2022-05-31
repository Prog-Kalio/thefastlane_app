@extends('admin.layout.layout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Locations</h4>
                       <a href="{{ url('admin/add-edit-location') }}"><button class="font-weight-light small-text mb-0 btn-success">
                            Add Locations
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
                            <table id="locations" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Name
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
                                  @foreach($locations as $location)
                                    <tr>
                                        <td>
                                            {{ $location['id'] }}
                                        </td>
                                        <td>
                                            {{ $location['name'] }}
                                        </td>
                                        <td>
                                            @if($location['status']==1)
                                              <a class="updateLocationStatus" id="location-{{ $location['id'] }}" location_id="{{ $location['id'] }}" href="javascript:void(0)"><i style="font-size:25px" class="mdi mdi-bookmark-check" status="Active"></i></a>
                                            @else
                                              <a class="updateLocationStatus" id="location-{{ $location['id'] }}" location_id="{{ $location['id'] }}" href="javascript:void(0)"><i style="font-size:25px" class="mdi mdi-bookmark-outline" status="Inactive"></i></a>
                                            @endif
                                        </td>
                                        <td>
                                              <a href="{{ url('admin/add-edit-location/'.$location['id']) }}"><i style="font-size:25px; color: #215123;" class="mdi mdi-pencil-box"></i></a>
                                              <?php /* <a title="Location" class="confirmDelete" href="{{ url('admin/delete-location/'.$location['id']) }}"><i style="font-size:25px; color: #e0240a;" class="mdi mdi-file-excel-box"></i></a> */ ?>
                                              <a href="javascript:void(0)" class="confirmDelete" module="location" moduleid="{{ $location['id'] }}"><i style="font-size:25px; color: #e0240a;" class="mdi mdi-file-excel-box"></i></a>
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