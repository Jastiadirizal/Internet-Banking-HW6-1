<header class="sticky-top">
    <nav class="navbar navbar-expand-lg bg-white shadow">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarMenuCollapse"
                aria-controls="navbarMenuCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2 w-5 h-5" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="4" y1="6" x2="20" y2="6"></line>
                    <line x1="4" y1="12" x2="20" y2="12"></line>
                    <line x1="4" y1="18" x2="20" y2="18"></line>
                </svg>
            </button>
            <a href="" class="navbar-brand hidden-dark">
                <img src="{{ asset('images/rakamin-logo.png') }}" width="35px" alt="rakamin-logo.png">
            </a>
            <!-- <a href="" class="navbar-brand show-dark">
                <img src="assets/img/logo-bg-dark.svg" width="136px">
            </a> -->
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav nav-tabs mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }}" aria-current="page" href="{{ route('dashboard.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dashboard"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="13" r="2"></circle>
                                <line x1="13.45" y1="11.55" x2="15.5" y2="9.5"></line>
                                <path d="M6.4 20a9 9 0 1 1 11.2 0z"></path>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Transaksi") ? 'active' : '' }}" aria-current="page" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <rect x="4" y="4" width="6" height="5" rx="2"></rect>
                        <rect x="4" y="13" width="6" height="7" rx="2"></rect>
                        <rect x="14" y="4" width="6" height="16" rx="2"></rect>
                        </svg>
                            <span>Transaksi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Pelayanan") ? 'active' : '' }}" aria-current="page" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layers-subtract h-5 w-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <rect x="8" y="4" width="12" height="12" rx="2"></rect>
                        <path d="M16 16v2a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-8a2 2 0 0 1 2 -2h2"></path>
                        </svg>
                            <span>Pelayanan</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navbar-right">
                <ul class="navbar-nav nav-tabs ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link-avatar" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="d-none d-md-block me-1">{{ $user }}</span>&nbsp;
                            <div class="avatar"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-tabler icon-tabler-chevron-down w-4 h-4"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ route('profil.edit') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 icon icon-tabler icon-tabler-settings" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
                                        </path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    <span>Change Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 icon icon-tabler icon-tabler-logout" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                        </path>
                                        <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                                    </svg>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="sidenav sidenav-tabs bg-white offcanvas offcanvas-start" id="navbarMenuCollapse">
        <div class="offcanvas-header sticky-top navbar">

            <a href="" class="navbar-brand hidden-dark">
                <img src="assets/img/logo.svg" width="136px">
            </a>
            <a href="" class="navbar-brand show-dark">
                <img src="assets/img/logo-bg-dark.svg" width="136px">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
    </div>
</header>
