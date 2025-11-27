<header class="navbar-container">
    <nav class="navbar">
        <!-- Logo -->
        <a href="/" class="navbar-logo">
            <img src="{{ asset('Assets/logo.png') }}" alt="StarRoom">
            <span>StarRoom</span>
        </a>

        <!-- Menu Button (Mobile) -->
        <div class="menu-toggle" id="menuToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Links -->
        <div class="navbar-links" id="navbarLinks">
            <a href="/" class="nav-link">Beranda</a>
            <a href="/HomePage/pilihkota" class="nav-link">Kota</a>
            <a href="/HomePage/pilihhotel" class="nav-link">Hotel</a>
            @auth
                <div class="nav-user-menu">
                    <span class="nav-username">{{ Auth::user()->name }}</span>
                    <a href="/dashboard" class="nav-link">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="nav-logout">
                        @csrf
                        <button type="submit" class="nav-link">Logout</button>
                    </form>
                </div>
            @else
                <a href="/login" class="nav-btn">Login</a>
            @endauth
        </div>
    </nav>
</header>

<script>
    const menuToggle = document.getElementById('menuToggle');
    const navbarLinks = document.getElementById('navbarLinks');

    menuToggle.addEventListener('click', () => {
        navbarLinks.classList.toggle('active');
    });

    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            navbarLinks.classList.remove('active');
        });
    });
</script>
