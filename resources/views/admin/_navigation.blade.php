<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="{{route('adminhome')}}">
                <img src="{{asset('assets')}}/img/logo.png" class="navbar-brand-img" alt="...">
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
                            <span class="nav-link-text">Kategoriler</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_treatments')}}">
                            <i class="ni ni-trophy text-default"></i>
                            <span class="nav-link-text">Tedaviler</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_messages')}}">
                            <i class="ni ni-email-83 text-default"></i>
                            <span class="nav-link-text">Mesajlar</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_review')}}">
                            <i class="ni ni-chat-round text-default"></i>
                            <span class="nav-link-text">Yorumlar</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_users')}}">
                            <i class="ni ni-single-02 text-default"></i>
                            <span class="nav-link-text">Kullanıcılar</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_randevu')}}">
                            <i class="ni ni-calendar-grid-58 text-default"></i>
                            <span class="nav-link-text">Randevular</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_process')}}">
                            <i class="ni ni-credit-card text-default"></i>
                            <span class="nav-link-text">Ödemeler</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_faq')}}">
                            <i class="ni ni-air-baloon text-default"></i>
                            <span class="nav-link-text">S.S.S</span>
                        </a>
                    </li>

                </ul>

                <hr class="my-3">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_setting')}}">
                            <i class="ni ni-settings-gear-65 text-default"></i>
                            <span class="nav-link-text">Ayarlar</span>
                        </a>
                    </li>
                </ul>



            </div>
        </div>
    </div>
</nav>
