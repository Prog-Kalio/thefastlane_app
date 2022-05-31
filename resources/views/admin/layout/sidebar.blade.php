<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/dashboard') }}">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="icon-layout menu-icon ti-settings"></i>
            <span class="menu-title">Settings</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/update-admin-password') }}">Update Password</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/update-admin-details') }}">Update Details</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-admin" aria-expanded="false" aria-controls="ui-admin">
            <i class="icon-columns menu-icon mdi mdi-lock-plus"></i>
            <span class="menu-title">Admin Management</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-admin">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/admins/admin') }}">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/admins/subadmin') }}">Sub Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/admins') }}">All</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
            <i class="icon-columns menu-icon mdi mdi-lead-pencil"></i>
            <span class="menu-title">Insertions</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/locations') }}">Locations</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/movies') }}">Movies</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/logout') }}">
            <i class="icon-ban menu-icon ti-power-off text-danger"></i> &nbsp;
            <span class="menu-title"> Logout</span>
            </a>
        </li>
    </ul>
</nav>