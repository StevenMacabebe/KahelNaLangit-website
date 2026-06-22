<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" rel="stylesheet">

    <style>
        /* ============================================
           BASE STYLES
           ============================================ */
        body {
            font-family: 'Poppins', sans-serif;
            background: #faf7e5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .wrapper {
            flex: 1;
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
           PAGE HEADER
           ============================================ */
        .page-header {
            padding: 40px 0 32px;
            margin-bottom: 24px;
        }

        .page-header h1 {
            font-weight: 700;
            font-size: 2.5rem;
            color: #c25328;
        }

        .page-header .lead {
            font-size: 15px;
            color: #6c757d;
        }

        /* ============================================
           CARDS
           ============================================ */
        .card {
            background: #f8f4ed !important;
            border: 3px solid #ffffff !important;
            border-radius: 18px !important;
            box-shadow: 0 0 0 4px #d771ab, 0 8px 20px rgba(0,0,0,0.15) !important;
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

        /* ============================================
           CONTACT INFO ICONS
           ============================================ */
        .contact-icon {
            width: 40px;
            height: 40px;
            background: #d771ab;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: white;
            font-size: 20px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 16px;
        }

        .contact-item .info {
            font-size: 14px;
            color: #333;
        }

        .contact-item .info strong {
            display: block;
            font-weight: 600;
            color: #c25328;
        }

        /* ============================================
           SOCIAL BUTTONS
           ============================================ */
        .social-btn {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: white !important;
            transition: transform 0.3s;
        }

        .social-btn:hover {
            transform: translateY(-3px);
        }

        .social-btn.facebook {
            background: #1877f2;
        }
        .social-btn.instagram {
            background: #e4405f;
        }
        .social-btn.twitter {
            background: #000000;
        }

        /* ============================================
           MAP
           ============================================ */
        .map-container {
            border-radius: 18px;
            overflow: hidden;
            border: 3px solid #ffffff;
            box-shadow: 0 0 0 4px #d771ab;
        }

        .map-container iframe {
            width: 100%;
            height: 280px;
            display: block;
            border: 0;
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

        footer p {
            color: #faf7e5;
            font-size: 13px;
            margin: 0;
        }
    </style>
</head>
<body>

    <div class="wrapper">

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
             PAGE HEADER
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

                <!-- LEFT: Contact Form -->
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 style="color: #c25328; font-weight: 700;">Send Us a Message</h4>
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
                                <a href="/login" class="btn btn-warning text-white">Login</a>
                                <a href="/register" class="btn btn-secondary">Register</a>
                            @endauth
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Contact Info + Map -->
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">

                            <!-- Contact Details -->
                            <h4 style="color: #c25328; font-weight: 700;">Contact Information</h4>
                            <hr>

                            <!-- Email -->
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="ti ti-mail"></i>
                                </div>
                                <div class="info">
                                    <strong>Email</strong>
                                    info@kahelnalangit.org
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="ti ti-phone"></i>
                                </div>
                                <div class="info">
                                    <strong>Phone</strong>
                                    +63 912 345 6789
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="ti ti-map-pin"></i>
                                </div>
                                <div class="info">
                                    <strong>Address</strong>
                                    Damayan, Blk 64, Floodway,<br>Taytay, Rizal, Philippines, 1920
                                </div>
                            </div>

                            <hr>

                            <!-- Follow Us -->
                            <h5 style="color: #c25328; font-weight: 600;">Follow Us</h5>
                            <div class="d-flex gap-2 mt-2">
                                <a href="#" class="social-btn facebook"><i class="ti ti-brand-facebook"></i></a>
                                <a href="#" class="social-btn instagram"><i class="ti ti-brand-instagram"></i></a>
                                <a href="#" class="social-btn twitter"><i class="ti ti-brand-x"></i></a>
                            </div>

                            <hr>

                            <!-- Google Maps -->
                            <h5 style="color: #c25328; font-weight: 600;">Find Us</h5>
                            <div class="map-container mt-2">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.820448639135!2d121.14098901483925!3d14.5535443898139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c7f6e4a2d72b%3A0x8e8d8d8d8d8d8d8d!2sDamayan%2C%20Blk%2064%2C%20Floodway%2C%20Taytay%2C%20Rizal!5e0!3m2!1sen!2sph!4v1700000000000"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- ============================================
         FOOTER
         ============================================ -->
    <footer>
        <div class="container">
            <p class="mb-0">© 2026 Kahel na Langit. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
