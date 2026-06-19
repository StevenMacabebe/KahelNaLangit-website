<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Kahel na Langit</title>
    <link href="https://fonts.googleapis.com/css2?family=Schoolbell&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/views/css/home.css') }}">
</head>
<body>
    <!-- ============================================
         NAVIGATION - ORANGE GRADIENT + GLASS EFFECT
         ============================================ -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">🌅 Kahel na Langit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Left side -->
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/partnerships">Partnerships</a></li>
                    <li class="nav-item"><a class="nav-link" href="/donate">Donate</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    
                    <!-- Right side -->
                    @auth
                        <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li>
                        <li class="nav-item">
                            <form method="POST" action="/logout" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link">Logout</button>
                            </form>
                        </li>
                        @else
                            <li class="nav-item"><a class="nav-link btn-login" href="/login">Login/Register</a></li>
                        @endauth
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="/admin/login">🔑 Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ============================================
         HERO SECTION
         ============================================ -->
    <section class="hero" style="
        background: url('{{ asset('public/images/hero.png') }}') center/cover no-repeat;
        color: white;
        padding: 120px 0;
        text-align: center;
        min-height: 500px;
        display: flex;
        align-items: center;
    ">
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
