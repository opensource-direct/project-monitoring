<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex" href="{{ Auth::user()->role === '1' ? route('administrator.index') : route('staff.index') }}" style="margin-top: -1px;">
        <div style="flex-direction: column; margin-top: -6px">
            <div style="font-size: 14px; ">recompose.job v1.2</div>
            <div style="font-size: 10px; text-align: left">imagine your hope</div>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    {{-- {{ dd(Auth::user()->role) }} --}}

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (\Request::route()->getName() === 'administrator.index') || (\Request::route()->getName() === 'staff.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ Auth::user()->role === '1' ? route('administrator.index') : route('staff.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Settings
     </div>
 
     <li class="nav-item">
         <a class="nav-link" href="#">
             <i class="fas fa-fw fa-wrench"></i>
             <span>Settings</span></a>
     </li>

     <li class="nav-item" style="margin-top: -15px">
         <a class="nav-link" href="#">
             <i class="fas fa-fw fa-door-closed"></i>
             <span>Logout</span></a>
     </li>

</ul>