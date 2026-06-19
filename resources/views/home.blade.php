<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Kahel na Langit</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Schoolbell&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
         UPDATES SECTION
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
         WISHLIST SECTION
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
         PARTNERSHIPS SECTION
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
