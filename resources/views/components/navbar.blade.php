<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="/"><img src="{{ asset("uploads/logo/logo1.png") }}" alt="logo" width="100px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Left Menu -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('bloggs*') ? 'active' : '' }}" href="/bloggs">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>

            <!-- Right Menu (Login / Signup OR User Dropdown) -->
            <ul class="navbar-nav ms-lg-3">
                @if(session()->has('LoggedUser'))
                    <!-- User Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn btn-outline-primary" href="#" id="userDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ session('LoggedUser')->first_name ?? 'User' }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li>
                                @if(session('LoggedUser')->role === 'admin')
                                    <a class="dropdown-item" href="{{ url('profile') }}">Profile</a>
                                @elseif(session('LoggedUser')->role === 'user')
                                    <a class="dropdown-item" href="{{ url('userprofile') }}">Profile</a>
                                @endif
                            </li>

                            <li>
                                <form action="{{ url('logout') }}" method="GET" class="d-inline">
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <!-- Login / Signup Buttons -->
                    @if (!Request::is('login'))
                        <li class="nav-item">
                            <a class="btn btn-outline-primary me-2" href="{{ url('login') }}">Login</a>
                        </li>
                    @endif

                    @if (!Request::is('signup'))
                        <li class="nav-item">
                            <a class="btn btn-primary" href="{{ url('signup') }}">Sign Up</a>
                        </li>
                    @endif
                @endif
            </ul>
        </div>
    </div>
</nav>