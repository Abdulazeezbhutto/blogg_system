<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="/">MyBlog</a>
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


            <!-- Right Menu (Login / Signup) -->
            <ul class="navbar-nav ms-lg-3">
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
            </ul>
        </div>
    </div>
</nav>