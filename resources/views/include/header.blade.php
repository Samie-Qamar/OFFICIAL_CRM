<div class="page-container">
    <!-- sidebar menu area start -->
    <div class="sidebar-menu" id="sidebar">
        <div class="sidebar-header">
            <!-- Close button -->
            <button id="close-sidebar" class="close-btn" onclick="toggleSidebar()">×</button>
            <!-- Optional: Add a logo or title here -->
        </div>
        <div class="main-menu">
            <div class="menu-inner">
                <nav>
                    <ul class="metismenu" id="menu">
                        <!-- Sidebar menu items -->
                        <li class="active">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                            <ul class="collapse">
                                <li class="active"><a href="{{ route('manage.all.leave') }}">Manage Leaves</a></li>
                                <li><a href="{{ route('manage.all.holiday') }}">Manage Announcements</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i><span>Admin Management</span></a>
                            <ul class="collapse">
                                <li><a href="{{route('show.create.users.roles')}}">Roles</a></li>
                                <li><a href="fontawesome.html">Permissions</a></li>
                                <li><a href="themify.html">Permission</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i><span>Tables</span></a>
                            <ul class="collapse">
                                <li><a href="table-basic.html">Basic Table</a></li>
                                <li><a href="table-layout.html">Table Layout</a></li>
                                <li><a href="datatable.html">DataTable</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layers-alt"></i><span>Pages</span></a>
                            <ul class="collapse">
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="reset-pass.html">Reset Password</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="maps.html"><i class="ti-map-alt"></i><span>Maps</span></a>
                        </li>
                        <li>
                            <a href="invoice.html"><i class="ti-receipt"></i><span>Invoice Summary</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Optional: Add an open button outside the sidebar -->
    <button id="open-sidebar" class="open-btn" onclick="toggleSidebar()">☰</button>
</div>

<style>
    /* Basic styles for the sidebar and buttons */
    .sidebar-menu {
        width: 250px;
        height: 100vh;
        background-color: #2A2A2A;
        color: #FFF;
        position: fixed;
        top: 0;
        left: 0;
        overflow-y: auto;
        transition: transform 0.3s ease;
        transform: translateX(0); /* Default visible */
    }
    .sidebar-menu.hidden {
        transform: translateX(-100%); /* Hide sidebar */
    }
    .close-btn {
        font-size: 24px;
        color: #FFF;
        background: none;
        border: none;
        cursor: pointer;
        position: absolute;
        top: 10px;
        right: 10px;
    }
    .open-btn {
        font-size: 18px;
        color: #333;
        background-color: #FFF;
        border: none;
        cursor: pointer;
        padding: 10px 20px;
        position: absolute;
        top: 4px;
        left: 255px; /* Position right outside the sidebar */
    }
</style>

<script>
    // Function to toggle sidebar visibility
    function toggleSidebar() {
        document.getElementById("sidebar").classList.toggle("hidden");
    }
</script>
