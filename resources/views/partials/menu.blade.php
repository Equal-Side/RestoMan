<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    Dashboard
                </a>
            </li>
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        User Management
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    Permissions
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    Roles
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    Users
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('kitchen_access')
            <li class="nav-item">
                <a href="{{ route("admin.kitchen") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-fire">

                    </i>
                    Live Kitchen
                </a>
            </li>
            @endcan

            @can('order_access')
            <li class="nav-item nav-dropdown">
                <a href="#" class="nav-link nav-dropdown-toggle">
                    <i class="nav-icon fas fa-fw fa-clipboard">

                    </i>
                    Order
                </a>
                <ul class="nav-dropdown-items">
                    @can('new_order_access')
                    <li class="nav-item">
                    <a href="{{route('admin.add_order')}}" class="nav-link" style="padding-left:40px">Add Order</a>
                    </li>
                    @endcan
                    @can('all_order_access')
                    <li class="nav-item">
                    <a href="{{route('admin.all_order')}}" class="nav-link" style="padding-left:40px">All Orders</a>
                    </li>
                    @endcan
                    @can('non_paid_order_access')
                    <li class="nav-item">
                    <a href="{{route('admin.non_paid_order')}}" class="nav-link" style="padding-left:40px">Non Paid Orders</a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan

            @can('dish_access')
            <li class="nav-item nav-dropdown">
                <a href="#" class="nav-link nav-dropdown-toggle">
                    <i class="nav-icon fas fa-fw fa-utensils">

                    </i>
                    Dish
                </a>
                <ul class="nav-dropdown-items">
                    @can('new_dish_access')
                    <li class="nav-item">
                       <a href="#" class="nav-link" style="padding-left:40px">Add New Dish</a>
                    </li>
                    @endcan
                    @can('all_dish_access')
                    <li class="nav-item">
                        <a href="#" class="nav-link" style="padding-left:40px">All Dishes</a>
                    </li>
                    @endcan

                </ul>
            </li>
            @endcan

            @can('table_access')
            <li class="nav-item nav-dropdown">
                <a href="#" class="nav-link nav-dropdown-toggle">
                    <i class="nav-icon fas fa-fw fa-table">

                    </i>
                    Tables
                </a>
                <ul class="nav-dropdown-items">
                    @can('new_table_access')
                    <li class="nav-item">
                       <a href="#" class="nav-link" style="padding-left:40px">Add Table</a>
                    </li>
                    @endcan
                    @can('all_table_access')
                    <li class="nav-item">
                        <a href="#" class="nav-link" style="padding-left:40px">All Tables</a>
                    </li>
                    @endcan

                </ul>
            </li>
            @endcan



            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    Logout
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
