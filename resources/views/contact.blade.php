<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
           PAGE HEADER - #89479a
           ============================================ */
        .page-header {
            background: #89479a;
            color: white;
            padding: 50px 0;
            margin-bottom: 30px;
        }

        .page-header h1 {
            font-weight: 700;
        }

        .page-header .lead {
            font-size: 20px;
            opacity: 0.9;
        }

        /* ============================================
           CARDS
           ============================================ */
        .card {
            background: #f8f4ed !important;
            border: 3px solid #ffffff !important;
            border-radius: 18px !important;
            box-shadow: 0 0 0 4px #d97706, 0 8px 20px rgba(0,0,0,0.15) !important;
            overflow: hidden;
            transition: all .3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 0 5px #ffffff, 0 12px 25px rgba(0,0,0,.25) !important;
        }

        .btn-warning {
            background: #c25328 !important;
            border: none !important;
            color: white !important;
        }

        .btn-warning:hover {
            background: #9e3d18 !important;
            color: white !important;
        }

        .btn-primary {
            background: #c25328 !important;
            border: none !important;
            color: white !important;
        }

        .btn-primary:hover {
            background: #9e3d18 !important;
        }

        .btn-secondary {
            background: #6c757d !important;
            border: none !important;
            color: white !important;
        }

        /* ============================================
           FOOTER - SAME AS HOME/ABOUT
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
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/partnerships">Partnerships</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/contact">Contact Us</a></li>
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
         PAGE HEADER - #89479a
         ============================================ -->
    <div class="page-header">
        <div class="container">
            <h1>Contact Us</h1>
            <p class="lead">We'd love to hear from you</p>
        </div>
    </div>

    <!-- ============================================
         CONTENT
         ============================================ -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4>Send Us a Message</h4>
                        <hr>
                        @auth
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <form method="POST" action="{{ route('contact.submit') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Subject</label>
                                    <input type="text" class="form-control" name="subject" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Contact Number (optional)</label>
                                    <input type="text" class="form-control" name="contact_number">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" name="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-warning text-white w-100">Send Message</button>
                            </form>
                        @else
                            <div class="alert alert-info">
                                <strong>Please login or register to send a message.</strong>
                            </div>
                            <a href="/login" class="btn btn-primary">Login</a>
                            <a href="/register" class="btn btn-secondary">Register</a>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4>Contact Information</h4>
                        <hr>
                        <p><strong>Email:</strong> info@kahelnalangit.org</p>
                        <p><strong>Phone:</strong> +63 912 345 6789</p>
                        <p><strong>Address:</strong> Floodway, Taytay, Rizal, Philippines</p>
                        <hr>
                        <h5>Follow Us</h5>
                        <p>
                            <a href="#" class="btn btn-primary btn-sm">Facebook</a>
                            <a href="#" class="btn btn-info btn-sm text-white">Instagram</a>
                            <a href="#" class="btn btn-dark btn-sm">Twitter</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================
         FOOTER - SAME AS HOME/ABOUT
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
