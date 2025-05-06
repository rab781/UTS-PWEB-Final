<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">
            <span class="text-primary">Artikel</span>Ku
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ url('/dashboard') }}{{ request()->has('username') ? '?username='.request()->query('username') : '' }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ url('/pengelolaan') }}">Pengelolaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ url('/profile') }}{{ request()->has('username') ? '?username='.request()->query('username') : '' }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ url('/login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
