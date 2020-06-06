<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Aarogyam</span> LifeCare
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            @if(Auth::user()->hasAnyRole('admin'))
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="/admin/user/index" class="nav-link">
                        <i class="fas fa-user-cog fa-2x"></i>
                        <p style="padding-left: 10px;">
                            Admin
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-md fa-2x"></i>
                        <p style="padding-left: 10px;">
                           Doctor List
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="/admin/patients/patientList" class="nav-link">
                        <i class="fas fa-procedures fa-2x"></i>
                        <p style="padding-left: 10px;">
                            Patient List
                        </p>
                    </a>
                </li>
            </ul>
            @elseif (Auth::user()->hasAnyRole('doctor'))
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-cog fa-2x"></i>
                        <p style="padding-left: 10px;">
                           Doctor
                        </p>
                    </a>
                </li>
            </ul>
           @elseif(Auth::user()->hasAnyRole('patient'))
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-cog fa-2x"></i>
                        <p style="padding-left: 10px;">
                           Appointment
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-cog fa-2x"></i>
                        <p style="padding-left: 10px;">
                           Medicine
                        </p>
                    </a>
                </li>
            </ul>
            @endif
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
