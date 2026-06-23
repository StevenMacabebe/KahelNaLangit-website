<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kahel na Langit')</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Agrandir Font (or use Google Fonts) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* ============================================
           ROOT COLORS (Your Palette)
           ============================================ */
        :root {
            --orange-primary: #ff6c27;
            --orange-secondary: #ffa003;
            --orange-tertiary: #d85314;
            --orange-dark: #b8440e;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            background: #f8f9fa;
        }

        /* ============================================
           NAVBAR - ORANGE GRADIENT
           ============================================ */
        .navbar-custom {
            background: linear-gradient(135deg, var(--orange-primary), var(--orange-secondary), var(--orange-tertiary));
            padding: 12px 0;
            box-shadow: 0 4px 20px rgba(216, 83, 20, 0.3);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-custom .navbar-brand {
            color: var(--white) !important;
            font-weight: 700;
            font-size: 24px;
            letter-spacing: 1px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        .navbar-custom .navbar-brand:hover {
            color: var(--white) !important;
            opacity: 0.9;
        }

        .navbar-custom .navbar-nav .nav-link {
            color: var(--white) !important;
            font-weight: 500;
            padding: 8px 18px !important;
            border-radius: 30px;
            transition: all 0.3s ease;
            text-shadow: 0 1px 3px rgba(0,0,0,0.15);
        }

        .navbar-custom .navbar-nav .nav-link:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-2px);
        }

        .navbar-custom .navbar-nav .nav-link.active {
            background: rgba(255,255,255,0.3);
            font-weight: 600;
        }

        .navbar-custom .nav-link.text-warning {
            color: var(--white) !important;
            background: rgba(255,255,255,0.15);
            border-radius: 30px;
            padding: 8px 18px !important;
        }

        .navbar-custom .nav-link.text-warning:hover {
            background: rgba(255,255,255,0.3);
        }

        /* Mobile toggle button */
        .navbar-custom .navbar-toggler {
            border: 2px solid rgba(255,255,255,0.8);
            padding: 6px 12px;
        }

        .navbar-custom .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255,255,255,1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }

        /* Mobile menu */
        @media (max-width: 991px) {
            .navbar-custom .navbar-nav {
                background: rgba(255,255,255,0.1);
                border-radius: 20px;
                padding: 10px;
                margin-top: 10px;
                backdrop-filter: blur(5px);
            }
            .navbar-custom .navbar-nav .nav-link {
                text-align: center;
                padding: 12px 20px !important;
                border-bottom: 1px solid rgba(255,255,255,0.1);
            }
            .navbar-custom .navbar-nav .nav-link:last-child {
                border-bottom: none;
            }
            .navbar-custom .navbar-nav .nav-link:hover {
                background: rgba(255,255,255,0.15);
            }
        }

        /* ============================================
           FOOTER (Optional - add if needed)
           ============================================ */
        .footer-custom {
            background: #2c3e50;
            color: white;
            padding: 30px 0 20px;
            margin-top: 50px;
        }

        .footer-custom a {
            color: #ffa003;
            text-decoration: none;
        }
        .footer-custom a:hover {
            color: #ff6c27;
        }
    </style>
</head>
<body>

    <!-- ============================================
         NAVBAR - SAME ON ALL PAGES
         ============================================ -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="/">🌅 Kahel na Langit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('partnerships') ? 'active' : '' }}" href="/partnerships">Partnerships</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('donate') ? 'active' : '' }}" href="/donate">Donate</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="/contact">Contact</a></li>
                    @auth
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" href="/profile">Profile</a></li>
                        <li class="nav-item">
                            <form method="POST" action="/logout" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link" style="border: none; background: none; color: white; font-weight: 500;">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="/login">Login</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}" href="/register">Register</a></li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="/admin/login">🔑 Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ============================================
         PAGE CONTENT
         ============================================ -->
    <main>
        @yield('content')
    </main>

    <!-- ============================================
         FOOTER (Optional)
         ============================================ -->
    <footer class="footer-custom">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>🌅 Kahel na Langit</h5>
                    <p>Empowering Communities, Building Hope</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/partnerships">Partnerships</a></li>
                        <li><a href="/donate">Donate</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Admin Access</h5>
                    <ul class="list-unstyled">
                        <li><a href="/admin/login">🔑 Admin Login</a></li>
                    </ul>
                    <hr class="border-light">
                    <p class="text-muted small">© 2026 Kahel na Langit. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
