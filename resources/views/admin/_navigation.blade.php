<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="{{route('adminhome')}}">
                <img src="{{asset('assets')}}/admin/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_category')}}">
                            <i class="ni ni-bullet-list-67 text-default"></i>
                            <span class="nav-link-text">Categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_treatments')}}">
                            <i class="ni ni-trophy text-default"></i>
                            <span class="nav-link-text">Treatments</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>
