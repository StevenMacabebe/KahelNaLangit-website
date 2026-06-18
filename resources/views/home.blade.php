<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* ============================================
           GENERAL STYLES
           ============================================ */
        :root {
            --primary: #ff6c27;
            --primary-dark: #e55a1a;
            --primary-light: #ff8a4a;
            --dark: #2c3e50;
            --light: #f8f9fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #ffffff;
        }

        /* ============================================
           NAVBAR - RESPONSIVE
           ============================================ */
        .navbar {
            background: rgba(44, 62, 80, 0.95) !important;
            padding: 15px 0;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.2);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand {
            color: #ff6c27 !important;
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .navbar-brand:hover {
            color: #ff8a4a !important;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-size: 16px;
            font-weight: 500;
            padding: 10px 18px !important;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #ff6c27 !important;
            background: rgba(255,108,39,0.1);
        }

        .navbar-nav .nav-link.active {
            color: #ff6c27 !important;
            background: rgba(255,108,39,0.15);
        }

        .nav-link.text-warning {
            color: #ff6c27 !important;
        }

        .nav-link.text-warning:hover {
            color: #ff8a4a !important;
        }

        .navbar-toggler {
            border: 2px solid #ff6c27 !important;
            padding: 8px 12px;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255,108,39,1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }

        @media (max-width: 991px) {
            .navbar-nav {
                padding: 10px 0;
            }
            .navbar-nav .nav-link {
                text-align: center;
                padding: 12px 18px !important;
                border-bottom: 1px solid rgba(255,255,255,0.05);
            }
            .navbar-nav .nav-link:last-child {
                border-bottom: none;
            }
        }

        /* ============================================
           HERO SECTION - WITH BACKGROUND IMAGE
           ============================================ */
        .hero {
            background: 
                linear-gradient(rgba(44, 62, 80, 0.75), rgba(44, 62, 80, 0.85)),
                url('{{ asset("/public/images/hero.png") }}') center/cover no-repeat;
            color: white;
            padding: 120px 0;
            text-align: center;
            min-height: 500px;
            display: flex;
            align-items: center;
        }

        .hero .container {
            background: rgba(0,0,0,0.2);
            padding: 50px;
            border-radius: 20px;
            backdrop-filter: blur(5px);
        }

        .hero h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #fff;
        }

        .hero h1 span {
            color: #ff6c27;
        }

        .hero .lead {
            font-size: 24px;
            margin-bottom: 15px;
        }

        /* ============================================
           BUTTONS
           ============================================ */
        .btn-primary {
            background: #ff6c27 !important;
            border: none !important;
            padding: 12px 35px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #e55a1a !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255,108,39,0.4);
        }

        .btn-outline-light {
            border: 2px solid white !important;
            padding: 12px 35px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-outline-light:hover {
            background: white !important;
            color: #ff6c27 !important;
            transform: translateY(-2px);
        }

        .btn-warning {
            background: #ff6c27 !important;
            border: none !important;
            color: white !important;
        }

        .btn-warning:hover {
            background: #e55a1a !important;
            color: white !important;
        }

        /* ============================================
           SECTION TITLES
           ============================================ */
        .section-title {
            color: #ff6c27;
            margin-bottom: 30px;
            font-weight: bold;
            position: relative;
        }

        .section-title:after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: #ff6c27;
            margin: 10px auto 0;
            border-radius: 2px;
        }

        /* ============================================
           CARDS
           ============================================ */
        .card {
            background: #f8f4ed !important;
            border: 3px solid #ffffff !important;
            border-radius: 18px !important;
            box-shadow: 0 0 0 4px #ff6c27, 0 8px 20px rgba(0,0,0,0.15) !important;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 0 5px #ffffff, 0 12px 25px rgba(0,0,0,0.25) !important;
        }

        /* ============================================
           UPDATES
           ============================================ */
        .update-card {
            border-left: 4px solid #ff6c27 !important;
        }

        /* ============================================
           WISHLIST
           ============================================ */
        .wishlist-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .wishlist-placeholder {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #ff6c27, #e55a1a);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 48px;
            border-radius: 10px 10px 0 0;
        }

        .update-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        /* ============================================
           PROGRESS BAR
           ============================================ */
        .progress-bar {
            background: #ff6c27 !important;
        }

        /* ============================================
           BADGES
           ============================================ */
        .badge.bg-warning {
            background: #ff6c27 !important;
            color: white !important;
        }
        .badge.bg-info {
            background: #e67e22 !important;
            color: white !important;
        }
        .badge.bg-success {
            background: #27ae60 !important;
        }
        .badge.bg-secondary {
            background: #95a5a6 !important;
        }

        /* ============================================
           FOOTER
           ============================================ */
        footer {
            background: #2c3e50;
            color: white;
            padding: 40px 0 20px;
            margin-top: 50px;
        }

        footer a {
            color: #ff6c27 !important;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #ff8a4a !important;
        }

        footer h5 {
            color: #ff6c27;
        }

        footer hr {
            border-color: rgba(255,255,255,0.1);
        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 768px) {
            .hero {
                padding: 80px 0;
                min-height: 400px;
            }
            .hero h1 {
                font-size: 32px;
            }
            .hero .lead {
                font-size: 18px;
            }
            .hero .container {
                padding: 30px;
            }
            .btn-primary, .btn-outline-light {
                padding: 10px 25px;
                font-size: 14px;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 26px;
            }
            .hero .lead {
                font-size: 16px;
            }
            .hero .container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- ============================================
         NAVIGATION
         ============================================ -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">🌅 Kahel na Langit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/partnerships">Partnerships</a></li>
                    <li class="nav-item"><a class="nav-link" href="/donate">Donate</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    @auth
                        <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li>
                        <li class="nav-item">
                            <form method="POST" action="/logout" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="/admin/login">🔑 Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ============================================
         HERO SECTION - WITH BACKGROUND IMAGE
         ============================================ -->
<section class="hero">
    <div class="container">
        <h1>🌅 <span>Kahel na Langit</span></h1>
        <p class="lead">Empowering Communities, Building Hope</p>
        <p>A community-driven initiative dedicated to uplifting vulnerable communities.</p>
        <div class="mt-4">
            <a href="/donate" class="btn btn-primary btn-lg">Donate Now</a>
            <a href="/about" class="btn btn-outline-light btn-lg ms-2">Learn More</a>
        </div>
    </div>
</section>

    <!-- ============================================
         FEATURES SECTION
         ============================================ -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center shadow-sm">
                    <div class="card-body">
                        <h2 style="font-size: 48px;">🏠</h2>
                        <h5>Community Development</h5>
                        <p class="text-muted">Supporting housing and infrastructure initiatives for vulnerable communities.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center shadow-sm">
                    <div class="card-body">
                        <h2 style="font-size: 48px;">🤝</h2>
                        <h5>Fundraising</h5>
                        <p class="text-muted">Community-based fundraising campaigns to support sustainable programs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center shadow-sm">
                    <div class="card-body">
                        <h2 style="font-size: 48px;">🌱</h2>
                        <h5>Community Engagement</h5>
                        <p class="text-muted">Awareness campaigns promoting resilience and social responsibility.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================
         UPDATES SECTION
         ============================================ -->
    @if($updates->count() > 0)
        <div class="container mt-5">
            <h2 class="section-title text-center">📢 Latest Updates</h2>
            <div class="row">
                @foreach($updates as $update)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm update-card">
                            @if($update->image)
                                <img src="{{ asset('public/images/uploads/updates/' . $update->image) }}" 
                                     alt="{{ $update->title }}" 
                                     class="update-image">
                            @endif
                            <div class="card-body">
                                <span class="badge bg-{{ $update->category === 'announcement' ? 'warning' : 'info' }} mb-2">
                                    {{ ucfirst(str_replace('_', ' ', $update->category)) }}
                                </span>
                                <h5>{{ $update->title }}</h5>
                                <p class="text-muted">{{ Str::limit($update->content, 100) }}</p>
                                <small class="text-muted">{{ $update->created_at->format('M d, Y') }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- ============================================
         WISHLIST SECTION
         ============================================ -->
    @if($wishlist->count() > 0)
        <div class="container mt-5">
            <h2 class="section-title text-center">📋 Community Wishlist</h2>
            <p class="text-center text-muted">Items needed for our community projects</p>
            <div class="row">
                @foreach($wishlist as $item)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            @if($item->image)
                                <img src="{{ asset('public/images/uploads/wishlist/' . $item->image) }}" 
                                     alt="{{ $item->item_name }}" 
                                     class="wishlist-image">
                            @else
                                <div class="wishlist-placeholder">📦</div>
                            @endif
                            <div class="card-body">
                                <h5>{{ $item->item_name }}</h5>
                                <p class="text-muted">{{ Str::limit($item->description, 80) }}</p>
                                <div class="progress">
                                    <div class="progress-bar" style="width: {{ $item->quantity_needed > 0 ? ($item->quantity_received / $item->quantity_needed) * 100 : 0 }}%">
                                        {{ $item->quantity_received }}/{{ $item->quantity_needed }}
                                    </div>
                                </div>
                                <small class="text-muted">
                                    Status: <span class="badge bg-{{ $item->status === 'complete' ? 'success' : 'warning' }}">
                                        {{ ucfirst($item->status) }}
                                    </span>
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- ============================================
         PARTNERSHIPS SECTION
         ============================================ -->
    @if($partnerships->count() > 0)
        <div class="container mt-5">
            <h2 class="section-title text-center">🤝 Our Partners</h2>
            <div class="row">
                @foreach($partnerships as $partner)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 text-center shadow-sm">
                            <div class="card-body">
                                @if($partner->logo)
                                    <img src="{{ asset('public/images/uploads/partnerships/' . $partner->logo) }}" 
                                         alt="{{ $partner->name }}" 
                                         style="max-width: 100px; max-height: 100px; border-radius: 50%; margin-bottom: 15px; object-fit: cover; border: 3px solid #ff6c27; padding: 3px;">
                                @else
                                    <div style="font-size: 48px; margin-bottom: 15px;">🤝</div>
                                @endif
                                <h5>{{ $partner->name }}</h5>
                                <p class="text-muted">{{ Str::limit($partner->description, 80) }}</p>
                                @if($partner->website)
                                    <a href="{{ $partner->website }}" target="_blank" class="btn btn-sm btn-outline-primary">Visit Website</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- ============================================
         FOOTER
         ============================================ -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>🌅 Kahel na Langit</h5>
                    <p>Empowering Communities, Building Hope</p>
                    <p><small>© 2026 Kahel na Langit. All rights reserved.</small></p>
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
                    <p class="text-muted small">Built with ❤️ for the Damayan Community</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
