<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Schoolbell&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* ============================================
           BASE STYLES
           ============================================ */
        body {
            font-family: 'Poppins', sans-serif;
            background: #faf7e5;
            min-height: 100vh;
        }

        /* ============================================
           NAVBAR
           ============================================ */
        .navbar {
            background: #c25328 !important;
            padding: 12px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand,
        .nav-link {
            color: #faf7e5 !important;
            font-weight: 500;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 20px;
        }

        .nav-link:hover {
            opacity: 0.8;
        }

        .nav-link.btn-login {
            background: #faf7e5;
            color: #c25328 !important;
            border-radius: 20px;
            padding: 6px 18px !important;
            font-weight: 700;
            border: none;
        }

        .nav-link.btn-login:hover {
            background: #e8e0d0;
            opacity: 1;
        }

        .btn-logout-nav {
            background: transparent;
            color: #faf7e5 !important;
            border: 1.5px solid rgba(255,255,255,0.4);
            border-radius: 20px;
            padding: 6px 18px !important;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s ease;
            font-family: 'Poppins', sans-serif;
        }

        .btn-logout-nav:hover {
            background: rgba(255,255,255,0.15);
            border-color: rgba(255,255,255,0.7);
        }

        .navbar-toggler {
            border: 2px solid rgba(255,255,255,0.8);
            padding: 4px 10px;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255,255,255,1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }

        @media (max-width: 991px) {
            .navbar-nav {
                margin-top: 10px;
                padding-top: 10px;
                border-top: 1px solid rgba(255,255,255,0.15);
            }
            .nav-link.btn-login {
                text-align: center;
                width: 100%;
            }
            .btn-logout-nav {
                width: 100%;
                text-align: center;
            }
        }

        /* ============================================
           HERO SECTION
           ============================================ */
        .hero {
            background: url('{{ asset("public/images/hero.png") }}') center/cover no-repeat;
            color: white;
            padding: 100px 0;
            text-align: center;
            min-height: 500px;
            display: flex;
            align-items: center;
            position: relative;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .hero .container {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #fff;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.6);
        }

        /* SCHOOLBELL FONT FOR "KAHEL NA LANGIT" - BRIGHT AND CLEAR */
        .hero h1 .brand-name {
            font-family: 'Schoolbell', cursive;
            color: #ffa003;
            font-weight: 400;
            text-shadow: 0 0 20px rgba(255, 160, 3, 0.3), 2px 2px 8px rgba(0,0,0,0.3);
            opacity: 1 !important;
        }

        .hero .lead {
            font-size: 22px;
            margin-bottom: 15px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
        }

        .hero p {
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
            font-size: 18px;
        }

        /* ============================================
           BUTTONS
           ============================================ */
        .btn-primary {
            background: #c25328 !important;
            border: none !important;
            padding: 12px 35px;
            font-weight: 600;
            border-radius: 8px;
            color: white !important;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #9e3d18 !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(194, 83, 40, 0.4);
        }

        .btn-outline-light {
            border: 2px solid white !important;
            padding: 12px 35px;
            font-weight: 600;
            border-radius: 8px;
            color: white !important;
            background: transparent;
            transition: all 0.3s ease;
        }

        .btn-outline-light:hover {
            background: white !important;
            color: #c25328 !important;
            transform: translateY(-2px);
        }

        /* ============================================
           SECTION TITLES
           ============================================ */
        .section-title {
            margin-bottom: 30px;
            font-weight: 700;
            position: relative;
        }

        .section-title:after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            margin: 10px auto 0;
            border-radius: 2px;
        }

        /* ============================================
           FEATURES CARDS (Default - Orange)
           ============================================ */
        .feature-card {
            background: #f8f4ed !important;
            border: 3px solid #ffffff !important;
            border-radius: 18px !important;
            box-shadow: 0 0 0 4px #d97706, 0 8px 20px rgba(0,0,0,0.15) !important;
            overflow: hidden;
            transition: all .3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 0 5px #ffffff, 0 12px 25px rgba(0,0,0,.25) !important;
        }

        /* ============================================
           UPDATES - #ac1a1a
           ============================================ */
        .updates-title {
            color: #ac1a1a;
        }
        .updates-title:after {
            background: #ac1a1a;
        }

        .update-card {
            background: #f8f4ed !important;
            border: 3px solid #ffffff !important;
            border-radius: 18px !important;
            box-shadow: 0 0 0 4px #ac1a1a, 0 8px 20px rgba(0,0,0,0.15) !important;
            overflow: hidden;
            transition: all .3s ease;
        }

        .update-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 0 5px #ffffff, 0 12px 25px rgba(0,0,0,.25) !important;
        }

        .update-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        /* ============================================
           WISHLIST - #365fa9
           ============================================ */
        .wishlist-title {
            color: #365fa9;
        }
        .wishlist-title:after {
            background: #365fa9;
        }

        .wishlist-card {
            background: #f8f4ed !important;
            border: 3px solid #ffffff !important;
            border-radius: 18px !important;
            box-shadow: 0 0 0 4px #365fa9, 0 8px 20px rgba(0,0,0,0.15) !important;
            overflow: hidden;
            transition: all .3s ease;
        }

        .wishlist-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 0 5px #ffffff, 0 12px 25px rgba(0,0,0,.25) !important;
        }

        .wishlist-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .wishlist-placeholder {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #365fa9, #1a3a6b);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 48px;
            border-radius: 10px 10px 0 0;
        }

        .wishlist-progress .progress-bar {
            background: #365fa9 !important;
        }

        /* ============================================
           PARTNERS - #658107
           ============================================ */
        .partners-title {
            color: #658107;
        }
        .partners-title:after {
            background: #658107;
        }

        .partner-card {
            background: #f8f4ed !important;
            border: 3px solid #ffffff !important;
            border-radius: 18px !important;
            box-shadow: 0 0 0 4px #658107, 0 8px 20px rgba(0,0,0,0.15) !important;
            overflow: hidden;
            transition: all .3s ease;
        }

        .partner-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 0 5px #ffffff, 0 12px 25px rgba(0,0,0,.25) !important;
        }

        .partner-card .partner-name {
            color: #658107;
            font-weight: 700;
        }

        .partner-card .partner-desc {
            color: #4a5e05;
            font-weight: 500;
        }

        .partner-card .btn-outline-partner {
            border: 2px solid #658107 !important;
            color: #658107 !important;
            background: transparent;
            padding: 6px 18px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .partner-card .btn-outline-partner:hover {
            background: #658107 !important;
            color: white !important;
            transform: translateY(-2px);
        }

        /* ============================================
           BADGES
           ============================================ */
        .badge.bg-warning {
            background: #ac1a1a !important;
            color: white !important;
        }

        .badge.bg-info {
            background: #e07a50 !important;
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
            background: #c25328;
            color: #faf7e5;
            padding: 20px 0;
            text-align: center;
            margin-top: 40px;
            font-size: 13px;
        }

        footer a {
            color: #faf7e5 !important;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #ffa003 !important;
        }

        footer h5 {
            color: #faf7e5;
        }

        footer hr {
            border-color: rgba(255,255,255,0.15);
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
        }
    </style>
</head>
<body>

    <!-- ============================================
         NAVIGATION
         ============================================ -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <span style="width:18px;height:18px;background:#faf7e5;border-radius:50%;display:inline-block;vertical-align:middle;margin-right:6px;"></span>
                Kahel na Langit
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto align-items-center gap-1">
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/partnerships">Partnerships</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/donate">Donate</a></li>

                    @auth
                        <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li>
                        <li class="nav-item">
                            <form method="POST" action="/logout" class="d-inline">
                                @csrf
                                <button type="submit" class="btn-logout-nav">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link btn-login" href="/login">Login/Register</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- ============================================
         HERO SECTION - SCHOOLBELL FONT (BRIGHT)
         ============================================ -->
    <section class="hero" style="background: url('{{ asset('public/images/hero.png') }}') center/cover no-repeat;">
        <div class="container">
            <h1><span class="brand-name">Kahel na Langit</span></h1>
            <p class="lead">Empowering Communities, Building Hope</p>
            <p>A community-driven initiative dedicated to uplifting vulnerable communities.</p>
            <div class="mt-4">
                <a href="/donate" class="btn-primary btn-lg">Donate Now</a>
                <a href="/about" class="btn-outline-light btn-lg ms-2">Learn More</a>
            </div>
        </div>
    </section>

    <!-- ============================================
         FEATURES SECTION - ORANGE CARDS
         ============================================ -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center shadow-sm feature-card">
                    <div class="card-body">
                        <h2 style="font-size: 48px;">🏠</h2>
                        <h5>Community Development</h5>
                        <p class="text-muted">Supporting housing and infrastructure initiatives for vulnerable communities.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center shadow-sm feature-card">
                    <div class="card-body">
                        <h2 style="font-size: 48px;">🤝</h2>
                        <h5>Fundraising</h5>
                        <p class="text-muted">Community-based fundraising campaigns to support sustainable programs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center shadow-sm feature-card">
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
         UPDATES SECTION - #ac1a1a CARDS
         ============================================ -->
    @if($updates->count() > 0)
        <div class="container mt-5">
            <h2 class="section-title updates-title text-center">Latest Updates</h2>
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
                                <span class="badge bg-warning mb-2">
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
         WISHLIST SECTION - #365fa9 CARDS
         ============================================ -->
    @if($wishlist->count() > 0)
        <div class="container mt-5">
            <h2 class="section-title wishlist-title text-center">Community Wishlist</h2>
            <p class="text-center text-muted">Items needed for our community projects</p>
            <div class="row">
                @foreach($wishlist as $item)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm wishlist-card">
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
                                <div class="progress wishlist-progress">
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
         PARTNERSHIPS SECTION - #658107 CARDS
         ============================================ -->
    @if($partnerships->count() > 0)
        <div class="container mt-5">
            <h2 class="section-title partners-title text-center">Our Partners</h2>
            <div class="row">
                @foreach($partnerships as $partner)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 text-center shadow-sm partner-card">
                            <div class="card-body">
                                @if($partner->logo)
                                    <img src="{{ asset('public/images/uploads/partnerships/' . $partner->logo) }}" 
                                         alt="{{ $partner->name }}" 
                                         style="max-width: 100px; max-height: 100px; border-radius: 50%; margin-bottom: 15px; object-fit: cover; border: 3px solid #658107; padding: 3px;">
                                @else
                                    <div style="font-size: 48px; margin-bottom: 15px;">🤝</div>
                                @endif
                                <h5 class="partner-name">{{ $partner->name }}</h5>
                                <p class="partner-desc">{{ Str::limit($partner->description, 80) }}</p>
                                @if($partner->website)
                                    <a href="{{ $partner->website }}" target="_blank" class="btn btn-outline-partner">Visit Website</a>
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
                    <h5>Kahel na Langit</h5>
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
