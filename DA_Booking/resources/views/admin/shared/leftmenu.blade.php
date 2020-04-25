<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('admin/home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-users-cog"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN <sup>Q</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- User Admin -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route("permission.index")}}">Permission</a>
                <a class="collapse-item" href="{{route("role.index")}}">Role</a>
                <a class="collapse-item" href="{{route("user.index")}}">User Admin</a>
            </div>
        </div>
    </li>
    <!--EndUserAdmin-->
    <hr class="sidebar-divider">
    <!--Room-->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Room</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route("roomtype.index")}}">Room Type</a>
            <a class="collapse-item" href="{{route("tag.index")}}">Tag</a>
            <a class="collapse-item" href="{{route("service.index")}}">Service</a>
          </div>
        </div>
      </li>
    <!--EndRoom-->
    <hr class="sidebar-divider">
    <!--Page-->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="login.html">Heard</a>
            <a class="collapse-item" href="register.html">Footer</a>
            <a class="collapse-item" href="forgot-password.html">Slider</a>
        </div>
      </li>
    <!--EndPage-->










    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-address-book"></i>
            <span>Đơn hàng</span></a>
    </li>
    <!-- Heading -->
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
