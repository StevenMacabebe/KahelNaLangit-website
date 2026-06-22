<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        /* BASE */
        body  { font-family: 'Poppins', sans-serif; background: #faf7e5; min-height: 100vh; }

        /* NAVBAR */
        .navbar           { background: #c25328 !important; }
        .navbar-brand,
        .nav-link         { color: #faf7e5 !important; font-weight: 500; }
        .nav-link:hover   { opacity: 0.8; }
        .btn-login        { background: #faf7e5; color: #c25328 !important; border-radius: 20px; padding: 4px 14px !important; font-weight: 700; }

        /* HEADER */
        .page-header      { background: #eab000; color: #faf7e5; padding: 40px 0 32px; margin-bottom: 24px; }
        .page-header h1 { font-weight: 700; font-size: 2.5rem; }
        .page-header .lead { opacity: 0.85; font-size: 15px; }

        /* CARDS */
        .card             { background: #faf7e5 !important; border: 2px solid #eab000 !important; border-radius: 14px !important; box-shadow: 0 3px 10px rgba(0,0,0,0.10) !important; overflow: hidden; transition: transform 0.25s, box-shadow 0.25s; }
        .card:hover       { transform: translateY(-6px); box-shadow: 0 0 0 3px #eab000, 0 14px 28px rgba(0,0,0,0.18) !important; }
        .card h3          { color: #c25328; margin-bottom: 8px; }

        /* FOOTER */
        footer { background: #c25328; color: #faf7e5; padding: 20px 0; text-align: center; margin-top: 40px; }
        footer p { color: #faf7e5; font-size: 13px; }

        .qr-image { max-width: 200px; }


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

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1>Support Our Mission</h1>
            <p class="lead">Your donation helps us empower communities</p>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                @if($donation)
                    <!-- Bank 1 -->
                    @if($donation->bank1_name)
                        <div class="card mb-3 shadow-sm">
                            <div class="card-body">
                                <h4>🏦 {{ $donation->bank1_name }}</h4>
                                <p><strong>Account Name:</strong> {{ $donation->bank1_account_name }}</p>
                                <p><strong>Account Number:</strong> {{ $donation->bank1_account_number }}</p>
                            </div>
                        </div>
                    @endif

                    <!-- Bank 2 -->
                    @if($donation->bank2_name)
                        <div class="card mb-3 shadow-sm">
                            <div class="card-body">
                                <h4>🏦 {{ $donation->bank2_name }}</h4>
                                <p><strong>Account Name:</strong> {{ $donation->bank2_account_name }}</p>
                                <p><strong>Account Number:</strong> {{ $donation->bank2_account_number }}</p>
                            </div>
                        </div>
                    @endif

                    <!-- GCash -->
                    @if($donation->gcash_name || $donation->gcash_number)
                        <div class="card mb-3 shadow-sm">
                            <div class="card-body">
                                <h4>📱 GCash</h4>
                                @if($donation->gcash_name)
                                    <p><strong>Account Name:</strong> {{ $donation->gcash_name }}</p>
                                @endif
                                @if($donation->gcash_number)
                                    <p><strong>GCash Number:</strong> {{ $donation->gcash_number }}</p>
                                @endif
                                @if($donation->gcash_qr)
                                    <div class="text-center mt-2">
                                        <img src="{{ asset('public/images/uploads/donations/' . $donation->gcash_qr) }}" 
                                             alt="GCash QR Code" 
                                             class="qr-image img-fluid">
                                        <p class="text-muted small">Scan to donate via GCash</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif
                @else
                    <div class="alert alert-info">Donation details coming soon!</div>
                @endif
            </div>

            <!-- Guidelines -->
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4>📋 Donation Guidelines</h4>
                        <hr>
                        <p>{{ $donation->guidelines ?? 'Please check back for donation guidelines.' }}</p>
                        <div class="alert alert-success mt-3">
                            <h5>💚 Thank You!</h5>
                            <p>Your generosity helps us continue our mission of empowering communities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>© 2026 Kahel na Langit. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
