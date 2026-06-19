<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partnerships - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* ── Base ── */
        body {
            font-family: 'Poppins', sans-serif;
            background: #faf7e5;
            min-height: 100vh;
        }

        /* ── Navbar ── */
        .navbar {
            background: #c25328 !important;
        }
        .navbar-brand,
        .nav-link {
            color: #faf7e5 !important;
            font-weight: 500;
        }
        .nav-link:hover {
            opacity: 0.8;
        }
        .nav-link.btn-login {
            background: #faf7e5;
            color: #c25328 !important;
            border-radius: 20px;
            padding: 4px 14px !important;
            font-weight: 700;
        }

        /* ── Page header ── */
        .page-header {
            background: #658107;
            color: #faf7e5;
            padding: 40px 0 32px;
            margin-bottom: 24px;
        }
        .page-header h1 { font-weight: 700; }
        .page-header .lead { opacity: 0.85; font-size: 15px; }

        /* ── Cards ── */
        .card {
            background: #faf7e5 !important;
            border: 2.5px solid #ffffff !important;
            border-radius: 14px !important;
            box-shadow:
                0 0 0 3px #eab000,
                0 6px 18px rgba(0,0,0,0.13) !important;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow:
                0 0 0 4px #ffffff,
                0 12px 28px rgba(0,0,0,0.22) !important;
        }

        /* ── Banner image ── */
        .partner-banner {
            width: 100%;
            height: 160px;
            object-fit: cover;
            display: block;
        }
        .partner-banner-placeholder {
            height: 140px;
            background: linear-gradient(135deg, #c25328, #eab000);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #faf7e5;
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        /* ── Logo ── */
        .partner-logo {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            object-fit: cover;
            border: 2.5px solid #eab000;
            background: #faf7e5;
            margin: -32px auto 12px;
            display: block;
            position: relative;
            z-index: 1;
        }
        .partner-logo-placeholder {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            border: 2.5px solid #eab000;
            background: #faf7e5;
            margin: -32px auto 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            position: relative;
            z-index: 1;
        }

        /* ── Card body ── */
        .card-body {
            text-align: center;
            padding: 0 16px 20px;
        }
        .card-title {
            font-weight: 700;
            font-size: 14px;
            color: #365fa9;
            margin-bottom: 8px;
        }
        .card-text {
            font-size: 12px;
            color: #555;
            line-height: 1.6;
        }

        /* ── Buttons & badges ── */
        .btn-visit {
            border: 1.5px solid #365fa9;
            color: #365fa9;
            background: transparent;
            border-radius: 6px;
            padding: 4px 16px;
            font-size: 12px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .btn-visit:hover {
            background: #365fa9;
            color: #faf7e5;
        }
        .badge-current {
            background: #658107;
            color: #faf7e5;
            border-radius: 4px;
            padding: 3px 12px;
            font-size: 11px;
            font-weight: 700;
            display: inline-block;
        }
        .badge-past {
            background: #888;
            color: #faf7e5;
            border-radius: 4px;
            padding: 3px 12px;
            font-size: 11px;
            font-weight: 700;
            display: inline-block;
        }

        /* ── Empty state ── */
        .alert-info {
            background: #fff8e1;
            border: 1.5px solid #eab000;
            color: #555;
        }

        /* ── Footer ── */
        footer {
            background: #c25328;
            color: #faf7e5;
            padding: 20px 0;
            text-align: center;
            margin-top: 40px;
            font-size: 13px;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
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
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/partnerships">Partnerships</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/donate">Donate</a></li>
                    <li class="nav-item"><a class="nav-link btn-login" href="/login">Login/Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1>Our Partnerships</h1>
            <p class="lead">Collaborating with organizations to create lasting impact</p>
        </div>
    </div>

    <!-- Partnerships Grid — 3 columns -->
    <div class="container">
        @if($partnerships->count() > 0)
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($partnerships as $partnership)
                    <div class="col">
                        <div class="card h-100">

                            <!-- Banner Image -->
                            @if($partnership->banner_image)
                                <img src="{{ asset('public/images/uploads/partnerships/' . $partnership->banner_image) }}"
                                     alt="{{ $partnership->name }}"
                                     class="partner-banner">
                            @else
                                <div class="partner-banner-placeholder">
                                    🤝 Partnership
                                </div>
                            @endif

                            <div class="card-body">

                                <!-- Logo -->
                                @if($partnership->logo)
                                    <img src="{{ asset('public/images/uploads/partnerships/' . $partnership->logo) }}"
                                         alt="{{ $partnership->name }}"
                                         class="partner-logo">
                                @else
                                    <div class="partner-logo-placeholder">🤝</div>
                                @endif

                                <h5 class="card-title">{{ $partnership->name }}</h5>
                                <p class="card-text">{{ $partnership->description ?? 'No description available.' }}</p>

                                <div class="d-flex flex-column align-items-center gap-2 mt-3">
                                    @if($partnership->website)
                                        <a href="{{ $partnership->website }}" target="_blank" class="btn-visit">
                                            Visit Website
                                        </a>
                                    @endif
                                    <span class="{{ $partnership->status === 'current' ? 'badge-current' : 'badge-past' }}">
                                        {{ ucfirst($partnership->status) }}
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info text-center mt-4">
                <h4>No partnerships yet</h4>
                <p class="mb-0">Check back soon for updates on our partners!</p>
            </div>
        @endif
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p class="mb-0">© 2026 Kahel na Langit. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
