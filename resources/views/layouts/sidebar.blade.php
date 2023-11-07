<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex" href="#" style="margin-left: -10px">
        <div class="sidebar-brand-text mx-3">recomposejob</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('administrator.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        My Priorities
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('reminder.index') }}">
            <i class="fas fa-fw fa-bell"></i>
            <span>Reminder Task</span></a>
    </li>

    {{-- <li class="nav-item" style="margin-top: -15px">
        <a class="nav-link" href="{{ route('barang') }}">
            <i class="fas fa-fw fa-box"></i>
            <span>Data Barang</span></a>
    </li> --}}

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
       Good & Proper Test
    </div>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-database"></i>
            <span>Master Testing<span class="badge badge-success ml-2">Soon</span></span></a>
    </li>

    <li class="nav-item" style="margin-top: -15px">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-flask"></i>
            <span>Testing & Validasi<span class="badge badge-success ml-2">Soon</span></span></span></a>
    </li>

    <li class="nav-item" style="margin-top: -15px">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-bug"></i>
            <span>Bug & Issue<span class="badge badge-success ml-2">Soon</span></span></span></a>
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