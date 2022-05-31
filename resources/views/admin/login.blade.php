<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TheFastLane Cinema</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ url('admin/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ url('admin/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ url('admin/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ url('admin/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ url('admin/images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ url('admin/images/logo.svg') }}" alt="logo">
              </div>
              <h4>TheFastLane Cinema</h4><br>
              <h6 class="font-weight-light">Sign in to continue. <span style="color:red">(ADMINS Only!)</span></h6>
              @if(Session::has('error_message'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Error: </strong> {{ Session::get('error_message') }}
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

              <form class="pt-3" action="{{ url('admin/login') }}" method="post">@csrf
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div><br>
                <div class="text-center">
                  <small class="text-muted">New Admin?<br> Contact your administrator for Registration</small>
                  <div><a href="{{ url('/')}}"><b><i><small class="text-danger">Movie Premier</small></i></b></a></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ url('admin/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ url('admin/js/off-canvas.js') }}"></script>
  <script src="{{ url('admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ url('admin/js/template.js') }}"></script>
  <script src="{{ url('admin/js/settings.js') }}"></script>
  <script src="{{ url('admin/js/todolist.js') }}"></script>
  <!-- endinject -->
</body>

</html>
