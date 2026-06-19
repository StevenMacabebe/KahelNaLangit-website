<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kahel na Langit - Home</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Schoolbell&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- ===== ALL CSS EMBEDDED HERE ===== -->
    <style>
        /* ============================================
           RESET & BASE
           ============================================ */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #ffffff;
            color: #000000;
        }

        /* ============================================
           NAVBAR – Gradient with WHITE text
           ============================================ */
        .navbar-custom {
            background: linear-gradient(135deg, #f97316 0%, #f59e0b 50%, #fcd34d 100%);
            padding: 12px 40px;
            border-radius: 50px;
            margin: 20px 30px 0;
            box-shadow: 0 8px 24px rgba(249, 115, 22, 0.35);
        }

        .navbar-custom .navbar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .brand-logo {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            object-fit: cover;
            background: #fff4e6;
            padding: 3px;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .brand-name {
            font-family: 'Schoolbell', cursive;
            font-size: 28px;
            color: #ffffff;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.20);
            white-space: nowrap;
        }

        .navbar-custom .navbar-nav .nav-link {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 16px;
            color: #ffffff !important;
            padding: 8px 16px;
            border-bottom: 2px solid transparent;
            transition: all 0.2s ease;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
        }

        .navbar-custom .navbar-nav .nav-link:hover,
        .navbar-custom .navbar-nav .nav-link.active {
            border-bottom-color: #ffffff;
            transform: translateY(-1px);
        }

        /* Login/Register button */
        .nav-link-login {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 16px;
            background: #1e1b1a;
            color: #fcd34d !important;
            padding: 8px 20px !important;
            border-radius: 30px;
            text-decoration: none;
            transition: 0.2s;
            display: inline-block;
        }

        .nav-link-login:hover {
            background: #000000;
            color: #fbbf24 !important;
            transform: scale(1.03);
        }

        /* Logout button */
        .btn-logout-nav {
            background: #1e1b1a;
            color: #fcd34d;
            padding: 8px 20px;
            border-radius: 30px;
            border: none;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn-logout-nav:hover {
            background: #000000;
            color: #fbbf24;
            transform: scale(1.03);
        }

        /* Navbar toggler (mobile) */
        .navbar-custom .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.5);
        }

        .navbar-custom .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255,255,255,0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* ============================================
           HERO SECTION – matching your image
           ============================================ */
        .hero-section {
            padding: 60px 20px 40px;
            background: #ffffff;
            text-align: center;
        }

        .hero-title {
            font-family: 'Schoolbell', cursive;
            font-size: 56px;
            font-weight: 400;
            color: #000000;
            margin-bottom: 8px;
            letter-spacing: 1px;
        }

        .hero-subtitle {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 30px;
            color: #000000;
            margin-bottom: 12px;
        }

        .hero-description {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 18px;
            color: #000000;
            max-width: 700px;
            margin: 0 auto 28px;
            line-height: 1.7;
        }

        .btn-donate {
            display: inline-block;
            background: #f97316;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 20px;
            padding: 16px 48px;
            border-radius: 50px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 16px rgba(249, 115, 22, 0.35);
            letter-spacing: 0.5px;
        }

        .btn-donate:hover {
            background: #ea580c;
            transform: translateY(-2px);
            box-shadow: 0 6px 24px rgba(249, 115, 22, 0.45);
            color: #ffffff;
        }

        /* ============================================
           FEATURE CARDS
           ============================================ */
        .feature-card {
            border-radius: 20px;
            padding: 8px 0;
            border: 1px solid #e5e7eb;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            background: #f9fafb;
        }

        .feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.10);
        }

        .feature-icon {
            font-size: 44px;
            display: block;
            margin-bottom: 12px;
        }

        .feature-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 20px;
            color: #000000;
            margin-bottom: 10px;
        }

        .feature-text {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 15px;
            color: #000000;
            line-height: 1.7;
        }

        /* ============================================
           SECTION TITLES
           ============================================ */
        .section-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size: 30px;
            color: #000000;
            margin-bottom: 30px;
            letter-spacing: 0.3px;
        }

        /* ============================================
           UPDATES, WISHLIST, PARTNERSHIPS
           ============================================ */
        .update-image,
        .wishlist-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 12px 12px 0 0;
        }

        .wishlist-placeholder,
        .partner-placeholder {
            font-size: 60px;
            text-align: center;
            padding: 30px 0;
            background: #f3f4f6;
            border-radius: 12px 12px 0 0;
        }

        .partner-logo {
            max-width: 100px;
            max-height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #f97316;
            padding: 3px;
        }

        .update-card {
            border-radius: 16px;
            overflow: hidden;
            transition: transform 0.2s;
        }

        .update-card:hover {
            transform: translateY(-4px);
        }

        /* ============================================
           FOOTER
           ============================================ */
        .footer {
            background: #1e1b1a;
            color: #ffffff;
            padding: 40px 0 20px;
            margin-top: 60px;
        }

        .footer a {
            color: #fcd34d;
            text-decoration: none;
            transition: 0.2s;
        }

        .footer a:hover {
            color: #fbbf24;
            text-decoration: underline;
        }

        .footer hr {
            border-color: rgba(255, 255, 255, 0.1);
        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 992px) {
            .navbar-custom {
                margin: 12px 16px 0;
                padding: 12px 20px;
                border-radius: 30px;
            }

            .brand-name {
                font-size: 22px;
            }

            .hero-title {
                font-size: 42px;
            }
            .hero-subtitle {
                font-size: 24px;
            }
        }

        @media (max-width: 768px) {
            .navbar-custom {
                margin: 8px 10px 0;
                padding: 10px 16px;
                border-radius: 24px;
            }

            .brand-logo {
                width: 36px;
                height: 36px;
            }
            .brand-name {
                font-size: 20px;
            }

            .navbar-custom .navbar-nav .nav-link {
                font-size: 14px;
                padding: 6px 12px;
                color: #ffffff !important;
            }

            .nav-link-login,
            .btn-logout-nav {
                font-size: 14px;
                padding: 6px 16px;
            }

            .hero-section {
                padding: 40px 16px 30px;
            }
            .hero-title {
                font-size: 32px;
            }
            .hero-subtitle {
                font-size: 20px;
            }
            .hero-description {
                font-size: 16px;
                padding: 0 10px;
            }
            .btn-donate {
                font-size: 18px;
                padding: 14px 36px;
            }

            .section-title {
                font-size: 24px;
            }
        }

        @media (max-width: 480px) {
            .navbar-custom {
                margin: 6px 6px 0;
                padding: 8px 12px;
                border-radius: 18px;
            }

            .brand-logo {
                width: 30px;
                height: 30px;
            }
            .brand-name {
                font-size: 17px;
            }

            .navbar-custom .navbar-nav .nav-link {
                font-size: 13px;
                padding: 5px 10px;
            }

            .hero-title {
                font-size: 26px;
            }
            .hero-subtitle {
                font-size: 17px;
            }
            .hero-description {
                font-size: 14px;
            }
            .btn-donate {
                font-size: 15px;
                padding: 12px 28px;
            }

            .feature-title {
                font-size: 17px;
            }
            .feature-text {
                font-size: 13px;
            }
        }
    </style>
</head>
<body>

    <!-- ============================================
         NAVIGATION - GRADIENT BACKGROUND + WHITE TEXT
         ============================================ -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">

            <!-- LEFT: Brand with logo -->
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Kahel na Langit Logo" class="brand-logo">
                <span class="brand-name">Kahel na Langit</span>
            </a>

            <!-- Toggler for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- RIGHT: All nav links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/partnerships">Partnerships</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/donate">Donate</a></li>

                    <!-- Login/Register -->
                    @auth
                        <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li>
                        <li class="nav-item">
                            <form method="POST" action="/logout" class="d-inline m-0">
                                @csrf
                                <button type="submit" class="btn-logout-nav">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link-login" href="/login">Login/Register</a></li>
                    @endauth
                </ul>
            </div>

        </div>
    </nav>

    <!-- ============================================
         HERO SECTION - EXACTLY AS YOUR IMAGE
         ============================================ -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="hero-title">Kahel na Langit</h1>
            <p class="hero-subtitle">Empowering Communities, Building Hope</p>
            <p class="hero-description">
                A community-driven initiative dedicated to uplifting vulnerable communities.
            </p>
            <div class="hero-buttons">
                <a href="/donate" class="btn-donate">Donate Now</a>
            </div>
        </div>
    </section>

    <!-- ============================================
         FEATURES / CARDS SECTION
         ============================================ -->
    <div class="container mt-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card feature-card h-100 text-center">
                    <div class="card-body">
                        <div class="feature-icon">🏗️</div>
                        <h5 class="feature-title">Community Development</h5>
                        <p class="feature-text">Supporting housing and infrastructure initiatives for vulnerable communities.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card h-100 text-center">
                    <div class="card-body">
                        <div class="feature-icon">🎯</div>
                        <h5 class="feature-title">Fundraising</h5>
                        <p class="feature-text">Community-based fundraising campaigns to support sustainable programs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card h-100 text-center">
                    <div class="card-body">
                        <div class="feature-icon">🤝</div>
                        <h5 class="feature-title">Community Engagement</h5>
                        <p class="feature-text">Awareness campaigns promoting resilience and social responsibility.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================
         UPDATES SECTION (if data exists)
         ============================================ -->
    @if(isset($updates) && $updates->count() > 0)
        <div class="container mt-5">
            <h2 class="section-title text-center">📢 Latest Updates</h2>
            <div class="row g-4">
                @foreach($updates as $update)
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm update-card">
                            @if($update->image)
                                <img src="{{ asset('images/uploads/updates/' . $update->image) }}"
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
         WISHLIST SECTION (if data exists)
         ============================================ -->
    @if(isset($wishlist) && $wishlist->count() > 0)
        <div class="container mt-5">
            <h2 class="section-title text-center">📋 Community Wishlist</h2>
            <p class="text-center text-muted">Items needed for our community projects</p>
            <div class="row g-4">
                @foreach($wishlist as $item)
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            @if($item->image)
                                <img src="{{ asset('images/uploads/wishlist/' . $item->image) }}"
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
         PARTNERSHIPS SECTION (if data exists)
         ============================================ -->
    @if(isset($partnerships) && $partnerships->count() > 0)
        <div class="container mt-5">
            <h2 class="section-title text-center">🤝 Our Partners</h2>
            <div class="row g-4">
                @foreach($partnerships as $partner)
                    <div class="col-md-4">
                        <div class="card h-100 text-center shadow-sm">
                            <div class="card-body">
                                @if($partner->logo)
                                    <img src="{{ asset('images/uploads/partnerships/' . $partner->logo) }}"
                                         alt="{{ $partner->name }}"
                                         class="partner-logo">
                                @else
                                    <div class="partner-placeholder">🤝</div>
                                @endif
                                <h5 class="mt-2">{{ $partner->name }}</h5>
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
    <footer class="footer">
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

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
