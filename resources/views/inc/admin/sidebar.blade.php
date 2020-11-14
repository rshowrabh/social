<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src='dist/img/user-data/profile/{{auth()->user()->profile}}' onerror="this.src='dist/img/user2-160x160.jpg'" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <p>
                        Starter Pages
                        <i class="right fa fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <router-link to='/dashboard' class="nav-link active">
                            <i class="fa fa-circle-o nav-icon"></i>
                            <p>Dashboard</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to='/profile' class="nav-link active">
                            <i class="fa fa-circle-o nav-icon"></i>
                            <p>profile</p>
                        </router-link>
                    </li>
                  
                </ul>
            </li>

            @can('isAdmin')
            <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <p>
                        Developer
                        <i class="right fa fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                 
                    <li class="nav-item">
                        <router-link to='/users' class="nav-link active">
                            <i class="fa fa-circle-o nav-icon"></i>
                            <p>users</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to='/developer' class="nav-link active">
                            <i class="fa fa-circle-o nav-icon"></i>
                            <p>api</p>
                        </router-link>
                    </li>

                </ul>
            </li>
            @endcan
            <li class="nav-item">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                    class="nav-link">
                    <i class="nav-icon fa fa-th"></i>
                    <p>
                        Logout
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>