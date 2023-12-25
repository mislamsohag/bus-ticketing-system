<header id="page-topbar">
  <div class="layout-width">
    <div class="navbar-header">
      <div class="d-flex">
        <!-- LOGO -->
        <div class="navbar-brand-box horizontal-logo">
          <a href="{{url('home')}}" class="logo logo-dark">
            <span class="logo-sm">
              <img src="{{asset('assets/images')}}/logo-sm.png" alt="" height="30" />
            </span>
            <span class="logo-lg">
              <img src="{{asset('assets/images')}}/logo-dark.png" alt="" height="60" />
            </span>
          </a>

          <a href="{{url('home')}}" class="logo logo-light">
            <span class="logo-sm">
              <img src="{{asset('assets/images')}}/logo-sm.png" alt="" height="30" />
            </span>
            <span class="logo-lg">
              <img src="{{asset('assets/images')}}/logo-light.png" alt="" height="60" />
            </span>
          </a>
        </div>

        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
          id="topnav-hamburger-icon">
          <span class="hamburger-icon">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </button>

        
      </div>

      <div class="d-flex align-items-center">
        <div class="dropdown d-md-none topbar-head-dropdown header-item">
          <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-search fs-22"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
            aria-labelledby="page-header-search-dropdown">
            <form class="p-3">
              <div class="form-group m-0">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username" />
                  <button class="btn btn-primary" type="submit">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="dropdown ms-1 topbar-head-dropdown header-item">
          <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img id="header-lang-img" src="{{asset('assets/images')}}/flags/bd.png" alt="Header Language" height="20"
              class="rounded" />
          </button>
          <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en"
              title="English">
              <img src="{{asset('assets/images')}}/flags/bd.png" alt="user-image" class="me-2 rounded" height="18" />
              <span class="align-middle">English</span>
            </a>
          </div>
        </div>



        <div class="ms-1 header-item d-none d-sm-flex">
          <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
            data-toggle="fullscreen">
            <i class="bx bx-fullscreen fs-22"></i>
          </button>
        </div>
        <!-- Full Screen Button -->
        <div class="ms-1 header-item d-none d-sm-flex">
          <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
            <i class="bx bx-moon fs-22"></i>
          </button>
        </div>
        <!-- Full Screen Button end-->
 
        <!-- Profile Section Start -->
        <div class="dropdown ms-sm-3 header-item topbar-user">

          @auth
          <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center">
              <img class="rounded-circle header-profile-user" src="{{asset('assets/images')}}/users/avatar-1.jpg"
                alt="Header Avatar" />
              <span class="text-start ms-xl-2">
                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">
                  @auth
                  {{auth()->user()->name}}
                  @endauth
                </span>
                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">
                  @auth
                  {{auth()->user()->email}}
                  @endauth
                </span>
              </span>
            </span>
          </button>
          @elseguest
          <a href="{{route('login')}}" class="btn btn-primary m-2">Login</a>
          <a href="{{route('sign-up')}}" class="btn btn-success m-2">Register</a>
          @endauth

          <div class="dropdown-menu dropdown-menu-end">
            <!-- Profile-->
            <a class="dropdown-item" href="{{route('profiles')}}"><i
                class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i>
              <span class="align-middle">Profile</span>
            </a>
            <!-- Message -->
            <a class="dropdown-item" href="{{url('apps-chat.html')}}"><i
                class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i>
              <span class="align-middle">Messages</span>
            </a>

            <div class="dropdown-divider"></div>
            <!-- Balance -->
            <a class="dropdown-item" href="{{route('profiles')}}"><i
                class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i>
              <span class="align-middle">Balance : <b>$5971.67</b></span>
            </a>
            <!-- Setting -->
            <a class="dropdown-item" href="{{url('pages-profile-settings.html')}}"><span
                class="badge bg-success-subtle text-success mt-1 float-end">New</span><i
                class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i>
              <span class="align-middle">Settings</span>
            </a>
            <!-- Lock Screen -->
            <a class="dropdown-item" href="{{url('auth-lockscreen-basic.html')}}"><i
                class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i>
              <span class="align-middle">Lock screen</span>
            </a>
            <!-- Logout -->
            <a class="dropdown-item" href="{{route('logout')}}"><i
                class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
              <span class="align-middle" data-key="t-logout">Logout</span></a>
          </div>
        </div>
        <!-- Profile Section end -->
      </div>
    </div>
  </div>
</header>