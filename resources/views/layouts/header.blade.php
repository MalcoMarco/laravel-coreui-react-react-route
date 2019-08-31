<header class="app-header navbar p-0">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ url('/') }}">
        <img class="navbar-brand-full" src="img/logo.png" width="89" height="25" alt="Modulr Logo">
        <img class="navbar-brand-minimized" src="img/logo2.png" width="30" height="30" alt="Modulr Logo">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Settings</a>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto mr-3">
        <li class="nav-item dropdown d-md-down-none">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">
                <i class="icon-bell"></i>
                <span class="badge badge-pill badge-danger">5</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                <div class="dropdown-header text-center">
                    <strong>You have 5 notifications</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="icon-user-follow text-success"></i> New user registered</a>
                <a class="dropdown-item" href="#">
                    <i class="icon-user-unfollow text-danger"></i> User deleted</a>
                <a class="dropdown-item" href="#">
                    <i class="icon-chart text-info"></i> Sales report is ready</a>
                <a class="dropdown-item" href="#">
                    <i class="icon-basket-loaded text-primary"></i> New client</a>
                <a class="dropdown-item" href="#">
                    <i class="icon-speedometer text-warning"></i> Server overloaded</a>
                <div class="dropdown-header text-center">
                    <strong>Server</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <div class="text-uppercase mb-1">
                        <small>
                            <b>CPU Usage</b>
                        </small>
                    </div>
                    <span class="progress progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </span>
                    <small class="text-muted">348 Processes. 1/4 Cores.</small>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="text-uppercase mb-1">
                        <small>
                            <b>Memory Usage</b>
                        </small>
                    </div>
                    <span class="progress progress-xs">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </span>
                    <small class="text-muted">11444GB/16384MB</small>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="text-uppercase mb-1">
                        <small>
                            <b>SSD 1 Usage</b>
                        </small>
                    </div>
                    <span class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </span>
                    <small class="text-muted">243GB/256GB</small>
                </a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">
                <img class="img-avatar mx-1" src="https://cdn3.iconfinder.com/data/icons/vector-icons-6/96/256-512.png">
                <!-- src= Auth::user()->avatar -->
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow mt-2">
                <a class="dropdown-item">
                    {{ Auth::user()->name }}<br>
                    <small class="text-muted">{{ Auth::user()->email }}</small>
                </a>
                <a class="dropdown-item" href="/profile">
                    <i class="fas fa-user"></i> Profile
                </a>
                <div class="divider"></div>
                <a class="dropdown-item" href="/password">
                    <i class="fas fa-key"></i> Password
                </a>
                <div class="divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</header>