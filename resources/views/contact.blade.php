<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Kahel na Langit</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tabler Icons (for vector icons) -->
    <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" rel="stylesheet">

    <style>
        /* ----- BASE STYLES ----- */
        body {
            font-family: 'Poppins', sans-serif;
            background: #faf7e5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .wrapper { flex: 1; }

        /* ----- NAVBAR - identical to About page ----- */
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
        .nav-link:hover { opacity: 0.8; }
        .btn-login {
            background: #faf7e5;
            color: #c25328 !important;
            border-radius: 20px;
            padding: 4px 14px !important;
            font-weight: 700;
            border: none;
        }
        .btn-login:hover {
            background: #e8e0d0;
            opacity: 1;
        }
        .navbar-toggler {
            border: 2px solid rgba(255,255,255,0.8);
            padding: 4px 10px;
        }
        .navbar-toggler:focus { box-shadow: none; }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255,255,255,1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }

        @media (max-width: 991px) {
            .navbar-nav {
                margin-top: 10px;
                padding-top: 10px;
                border-top: 1px solid rgba(255,255,255,0.15);
            }
            .btn-login {
                text-align: center;
                width: 100%;
            }
        }

        /* ----- PAGE HEADER - PINK BANNER ----- */
        .page-header {
            background: #d771ab;
            color: #faf7e5;
            padding: 40px 0 32px;
            margin-bottom: 24px;
        }
        .page-header h1 {
            font-weight: 700;
            font-size: 2.5rem;
            color: #faf7e5;
        }
        .page-header .lead {
            opacity: 0.85;
            font-size: 15px;
            color: #faf7e5;
        }

        /* ----- CARDS (pink outline) ----- */
        .card {
            background: #f8f4ed !important;
            border: 3px solid #ffffff !important;
            border-radius: 18px !important;
            box-shadow: 0 0 0 4px #d771ab, 0 8px 20px rgba(0,0,0,0.15) !important;
            overflow: hidden;
            transition: all .3s ease;
            height: 100%;
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
        .btn-secondary {
            background: #6c757d !important;
            border: none !important;
            color: white !important;
        }

        /* ----- CONTACT INFO ICONS (pink) ----- */
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

        /* ----- SOCIAL MEDIA - ICONS + LABELS ----- */
        .social-item {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 12px;
        }
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: white;
            font-size: 20px;
        }
        .social-icon.facebook {
            background: #1877f2;
        }
        .social-icon.instagram {
            background: #e4405f;
        }
        .social-label {
            font-weight: 600;
            color: #c25328;
            font-size: 14px;
            display: block;
        }
        .social-handle {
            font-size: 14px;
            color: #1a1a1a;
            display: block;
        }
        .social-handle a {
            color: #1a1a1a;
            text-decoration: none;
        }
        .social-handle a:hover {
            color: #c25328;
        }

        /* ----- LOGIN/REGISTER ALERT - POWDER PINK ----- */
        .alert-pink {
            background: #fce4ec;
            color: #7a3a5a;
            border: 2px solid #d771ab;
            border-radius: 12px;
        }
        .alert-pink strong {
            color: #5a2a3a;
        }

        /* ----- MAP CONTAINER ----- */
        .map-container {
            border-radius: 18px;
            overflow: hidden;
            border: 3px solid #ffffff;
            box-shadow: 0 0 0 4px #d771ab;
        }
        .map-container iframe {
            width: 100%;
            height: 350px;
            display: block;
            border: 0;
        }

        /* ----- FOOTER ----- */
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

        /* ----- Responsive ----- */
        @media (max-width: 768px) {
            .page-header h1 { font-size: 2rem; }
            .map-container iframe { height: 250px; }
        }
    </style>
</head>
<body>

<div class="wrapper">

    <!-- ============================================
         NAVIGATION - identical to About page
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
                    <li class="nav-item"><a class="nav-link btn-login" href="/login">Login/Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ============================================
         PAGE HEADER - PINK BANNER
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

        <!-- Row 1: Send a Message (left) + Follow Us (right) -->
        <div class="row">

            <!-- LEFT: Send a Message Card -->
            <div class="col-md-6 mb-4">
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
                            <div class="alert alert-pink">
                                <strong>Please login or register to send a message.</strong>
                            </div>
                            <a href="/login" class="btn btn-warning text-white">Login</a>
                            <a href="/register" class="btn btn-secondary">Register</a>
                        @endauth
                    </div>
                </div>
            </div>

            <!-- RIGHT: Follow Us Card -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 style="color: #c25328; font-weight: 700;">Follow Us</h4>
                        <hr>

                        <!-- Contact details with pink icons -->
                        <div class="contact-item">
                            <div class="contact-icon"><i class="ti ti-mail"></i></div>
                            <div class="info">
                                <strong>Email</strong>
                                info@kahelnalangit.org
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="ti ti-phone"></i></div>
                            <div class="info">
                                <strong>Phone</strong>
                                +63 912 345 6789
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="ti ti-map-pin"></i></div>
                            <div class="info">
                                <strong>Address</strong>
                                Damayan, Blk 64, Floodway,<br>Taytay, Rizal, Philippines, 1920
                            </div>
                        </div>

                        <hr>

                        <!-- Connect with us -->
                        <h5 style="color: #c25328; font-weight: 600;">Connect with us</h5>

                        <!-- Facebook: Blue icon, "Facebook" in ORANGE, "Kahel na Langit" in BLACK -->
                        <div class="social-item">
                            <div class="social-icon facebook"><i class="ti ti-brand-facebook"></i></div>
                            <div>
                                <span class="social-label">Facebook</span>
                                <span class="social-handle">
                                    <a href="https://www.facebook.com/profile.php?id=61563689687892" target="_blank">Kahel na Langit</a>
                                </span>
                            </div>
                        </div>

                        <!-- Instagram: Pink icon, "Instagram" in ORANGE, "int.kahelnalangit" in BLACK -->
                        <div class="social-item">
                            <div class="social-icon instagram"><i class="ti ti-brand-instagram"></i></div>
                            <div>
                                <span class="social-label">Instagram</span>
                                <span class="social-handle">
                                    <a href="https://www.instagram.com/int.kahelnalangit/" target="_blank">int.kahelnalangit</a>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div> <!-- end row 1 -->

        <!-- Row 2: Find Us (full width map) -->
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 style="color: #c25328; font-weight: 700;">Find Us</h4>
                        <hr>
                        <div class="map-container mt-2">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.820448639135!2d121.1273643!3d14.5357814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c6f7b72da001%3A0xd5c2c6c4dd9c9d15!2sDamayan%20Block%2064!5e0!3m2!1sen!2sph!4v1700000000000"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                        <p class="text-muted mt-2 mb-0 small">
                            <i class="ti ti-map-pin me-1"></i>
                            Damayan Block 64, San Juan, Taytay, 1920 Rizal, Philippines
                        </p>
                    </div>
                </div>
            </div>
        </div> <!-- end row 2 -->

    </div> <!-- end container -->

</div> <!-- end wrapper -->

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
