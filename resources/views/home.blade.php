<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Schoolbell&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

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
            border: 1.5px solid rgba(255, 255, 255, 0.4);
            border-radius: 20px;
            padding: 6px 18px !important;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s ease;
            font-family: 'Poppins', sans-serif;
        }

        .btn-logout-nav:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.7);
        }

        .navbar-toggler {
            border: 2px solid rgba(255, 255, 255, 0.8);
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
                border-top: 1px solid rgba(255, 255, 255, 0.15);
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
           HERO SECTION - FULLY RESPONSIVE
           ============================================ */
        .hero-video-wrapper {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 80vh;
            max-height: 800px;
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-video-wrapper video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translateX(-50%) translateY(-50%);
            z-index: 0;
            object-fit: cover;
        }

        .hero-video-wrapper .hero-content {
            position: relative;
            z-index: 1;
            width: 100%;
            padding: 40px 20px;
            text-align: center;
        }

        .hero-video-wrapper .hero-content .hero-logo {
            max-width: 80%;
            height: auto;
            margin-bottom: 10px;
            display: inline-block;
            /* ensure it's centered inline */
        }

        .hero-video-wrapper .hero-content .tagline {
            font-size: clamp(1rem, 2.5vw, 1.8rem);
            font-weight: 600;
            color: #c25328;
            margin-bottom: 15px;
            text-shadow: none;
            font-family: 'Poppins', sans-serif;
            letter-spacing: 1px;
        }

        .hero-video-wrapper .hero-content .btn-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        @media (max-width: 768px) {
            .hero-video-wrapper {
                height: 60vh;
                min-height: 350px;
            }
            .hero-video-wrapper .hero-content {
                padding: 20px 15px;
            }
            .hero-video-wrapper .hero-content .hero-logo {
                max-width: 90%;
            }
        }

        @media (max-width: 480px) {
            .hero-video-wrapper {
                height: 50vh;
                min-height: 300px;
            }
            .hero-video-wrapper .hero-content .tagline {
                font-size: 1rem;
            }
            .hero-video-wrapper .hero-content .hero-logo {
                max-width: 95%;
            }
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
            text-decoration: none;
            display: inline-block;
            font-size: 1rem;
        }

        .btn-primary:hover {
            background: #9e3d18 !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(194, 83, 40, 0.4);
        }

        .btn-outline-orange {
            border: 2px solid #c25328 !important;
            padding: 12px 35px;
            font-weight: 600;
            border-radius: 8px;
            color: #c25328 !important;
            background: transparent;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-size: 1rem;
        }

        .btn-outline-orange:hover {
            background: #c25328 !important;
            color: white !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(194, 83, 40, 0.3);
        }

        /* ============================================
           DAMAYAN MODEL HOUSE CARD
           ============================================ */
        .damayan-card {
            background: #f8f4ed !important;
            border: 3px solid #ffffff !important;
            border-radius: 18px !important;
            box-shadow: 0 0 0 4px #c25328, 0 8px 20px rgba(0, 0, 0, 0.15) !important;
            overflow: hidden;
            transition: all .3s ease;
            cursor: pointer;
        }

        .damayan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 0 5px #ffffff, 0 12px 25px rgba(0, 0, 0, .25) !important;
        }

        .damayan-card .damayan-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            min-height: 300px;
        }

        .damayan-card .damayan-title {
            color: #c25328;
            font-weight: 700;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .damayan-card .damayan-text {
            color: #4a4a4a;
            font-size: 16px;
            line-height: 1.8;
        }

        /* ============================================
           SECTION TITLES
           ============================================ */
        .section-title {
            margin-bottom: 30px;
            font-weight: 700;
        }

        /* ============================================
           UPDATES - #ac1a1a (RED CARDS) / ORANGE TITLES
           ============================================ */
        .updates-title {
            color: #c25328;
        }

        .update-card {
            background: #f8f4ed !important;
            border: 3px solid #ffffff !important;
            border-radius: 18px !important;
            box-shadow: 0 0 0 4px #ac1a1a, 0 8px 20px rgba(0, 0, 0, 0.15) !important;
            overflow: hidden;
            transition: all .3s ease;
            cursor: pointer;
        }

        .update-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 0 5px #ffffff, 0 12px 25px rgba(0, 0, 0, .25) !important;
        }

        .update-image-wrapper {
            width: 100%;
            padding-top: 100%;
            position: relative;
            overflow: hidden;
        }

        .update-image-wrapper .update-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .update-card .card-body {
            padding: 16px;
        }

        .update-card .card-title {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 8px;
            color: #c25328;
        }

        .update-card .card-text {
            font-size: 0.95rem;
            color: #1a1a1a;
        }

        /* ============================================
           MODAL STYLES (Updates)
           ============================================ */
        .modal-content {
            border-radius: 18px;
            border: 3px solid #ffffff;
            box-shadow: 0 0 0 4px #c25328;
            background: #faf7e5;
        }

        .modal-header {
            border-bottom: 2px solid #c25328;
            padding: 16px 24px;
        }

        .modal-header .btn-close {
            filter: invert(1);
        }

        .modal-body {
            padding: 24px;
        }

        .modal-body .modal-image-wrapper {
            padding-right: 20px;
        }

        .modal-body .modal-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 12px;
        }

        .modal-body .modal-category {
            display: inline-block;
            padding: 4px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
            margin-bottom: 10px;
            background: #ac1a1a;
            color: white;
        }

        .modal-body .modal-title {
            font-weight: 700;
            font-size: 1.6rem;
            color: #c25328;
            margin-bottom: 12px;
        }

        .modal-body .modal-content-text {
            font-size: 1rem;
            line-height: 1.8;
            color: #1a1a1a;
        }

        .modal-body .modal-date {
            font-size: 0.85rem;
            color: #888;
            margin-top: 10px;
        }

        @media (min-width: 768px) {
            .modal-body .modal-image {
                height: 100%;
                min-height: 300px;
            }
        }

        /* ============================================
           DAMAYAN CAROUSEL MODAL - SIMPLE (10 IMAGES)
           ============================================ */
        .damayan-carousel-modal .modal-dialog {
            max-width: 900px;
        }

        .damayan-carousel-modal .carousel-item img {
            width: 100%;
            height: 500px;
            object-fit: contain;
            background: #faf7e5;
            border-radius: 12px;
        }

        /* ---- Simple controls (no dark bg) ---- */
        .damayan-carousel-modal .carousel-control-prev,
        .damayan-carousel-modal .carousel-control-next {
            width: 5%;
            background: transparent !important;
            border: none;
            opacity: 0.7;
            transition: opacity 0.25s ease;
            top: 50%;
            transform: translateY(-50%);
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .damayan-carousel-modal .carousel-control-prev:hover,
        .damayan-carousel-modal .carousel-control-next:hover {
            opacity: 1;
        }

        .damayan-carousel-modal .carousel-control-prev-icon,
        .damayan-carousel-modal .carousel-control-next-icon {
            width: 32px;
            height: 32px;
            background-size: 100% 100%;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
        }

        .damayan-carousel-modal .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23c25328'%3E%3Cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3E%3C/svg%3E") !important;
        }

        .damayan-carousel-modal .carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23c25328'%3E%3Cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3E%3C/svg%3E") !important;
        }

        /* ---- Carousel Indicators (10 circles) placed BELOW the images ---- */
        .damayan-carousel-modal .carousel-indicators {
            position: relative;
            bottom: auto;
            margin-top: 18px;
            margin-bottom: 0;
            display: flex;
            justify-content: center;
            gap: 10px;
            padding: 0;
            list-style: none;
            background: transparent;
            transform: none;
        }

        .damayan-carousel-modal .carousel-indicators button {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            border: 2px solid #c25328;
            background: transparent;
            opacity: 0.5;
            transition: all 0.25s ease;
            padding: 0;
            margin: 0;
            text-indent: -9999px;
            cursor: pointer;
            flex: 0 0 auto;
            box-shadow: none;
        }

        .damayan-carousel-modal .carousel-indicators button.active {
            background: #c25328;
            opacity: 1;
            border-color: #c25328;
            transform: scale(1.15);
            box-shadow: 0 0 0 2px rgba(194, 83, 40, 0.3);
        }

        .damayan-carousel-modal .carousel-indicators button:hover {
            opacity: 0.8;
        }

        /* ============================================
           WISHLIST - #365fa9 (BLUE CARDS) / ORANGE TITLES
           ============================================ */
        .wishlist-title {
            color: #c25328;
        }

        .wishlist-card {
            background: #f8f4ed !important;
            border: 3px solid #ffffff !important;
            border-radius: 18px !important;
            box-shadow: 0 0 0 4px #365fa9, 0 8px 20px rgba(0, 0, 0, 0.15) !important;
            overflow: hidden;
            transition: all .3s ease;
        }

        .wishlist-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 0 5px #ffffff, 0 12px 25px rgba(0, 0, 0, .25) !important;
        }

        .wishlist-image-wrapper {
            width: 100%;
            padding-top: 100%;
            position: relative;
            overflow: hidden;
        }

        .wishlist-image-wrapper .wishlist-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .wishlist-placeholder {
            width: 100%;
            padding-top: 100%;
            position: relative;
            background: linear-gradient(135deg, #365fa9, #1a3a6b);
        }

        .wishlist-placeholder .placeholder-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 48px;
        }

        .wishlist-card .card-body h5 {
            color: #c25328;
            font-weight: 600;
        }

        .wishlist-card .card-body .text-muted {
            color: #1a1a1a !important;
        }

        .wishlist-progress .progress-bar {
            background: #365fa9 !important;
        }

        /* ============================================
           PARTNERS - #658107 (GREEN CARDS) / ORANGE TITLES
           ============================================ */
        .partners-title {
            color: #c25328;
        }

        .partner-card {
            background: #f8f4ed !important;
            border: 3px solid #ffffff !important;
            border-radius: 18px !important;
            box-shadow: 0 0 0 4px #658107, 0 8px 20px rgba(0, 0, 0, 0.15) !important;
            overflow: hidden;
            transition: all .3s ease;
        }

        .partner-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 0 5px #ffffff, 0 12px 25px rgba(0, 0, 0, .25) !important;
        }

        .partner-card .partner-name {
            color: #c25328;
            font-weight: 700;
        }

        .partner-card .partner-desc {
            color: #1a1a1a;
            font-weight: 400;
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
            text-decoration: none;
            display: inline-block;
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
            border-color: rgba(255, 255, 255, 0.15);
        }

        footer .footer-tagline {
            color: #faf7e5;
        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 768px) {
            .damayan-card .damayan-image {
                min-height: 200px;
            }

            .damayan-carousel-modal .carousel-item img {
                height: 300px;
            }

            .damayan-carousel-modal .carousel-control-prev,
            .damayan-carousel-modal .carousel-control-next {
                width: 8%;
            }

            .damayan-carousel-modal .carousel-control-prev-icon,
            .damayan-carousel-modal .carousel-control-next-icon {
                width: 24px;
                height: 24px;
            }

            .damayan-carousel-modal .carousel-indicators button {
                width: 14px;
                height: 14px;
                gap: 8px;
            }

            .update-card .card-title {
                font-size: 1rem;
            }
            .update-card .card-text {
                font-size: 0.85rem;
            }
        }

        @media (max-width: 480px) {
            .damayan-carousel-modal .carousel-indicators button {
                width: 12px;
                height: 12px;
                gap: 6px;
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
    HERO SECTION - RESPONSIVE with LOGO
    ============================================ -->
    <section class="hero-video-wrapper">
        <video autoplay muted loop playsinline>
            <source src="{{ asset('public/images/hero-video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-content">
            <div class="container">
                <!-- Logo image instead of text -->
                <img src="{{ asset('public/images/logo.png') }}" alt="Kahel na Langit Logo" class="hero-logo">
                <p class="tagline">A space of Resiliency, Hope, and Community.</p>
                <div class="btn-group">
                    <a href="/donate" class="btn-primary btn-lg">Donate Now</a>
                    <a href="/about" class="btn-outline-orange btn-lg">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
    DAMAYAN MODEL HOUSE CARD — now shows hm1
    ============================================ -->
    <div class="container mt-5">
        <div class="card damayan-card" data-bs-toggle="modal" data-bs-target="#damayanCarouselModal">
            <div class="row g-0">
                <div class="col-md-6">
                    @php
                        $hm1Jpg = public_path('images/hm1.jpg');
                        $hm1Png = public_path('images/hm1.png');
                        $hm1Exists = file_exists($hm1Jpg) || file_exists($hm1Png);
                        $hm1Src = file_exists($hm1Jpg) ? 'public/images/hm1.jpg' : (file_exists($hm1Png) ? 'public/images/hm1.png' : '');
                    @endphp
                    <img src="{{ $hm1Exists ? asset($hm1Src) : asset('public/images/damayan-house.jpg') }}"
                    alt="Damayan Model House"
                    class="damayan-image"
                    style="cursor: pointer;">
                </div>
                <div class="col-md-6">
                    <div class="card-body p-4">
                        <h3 class="damayan-title">The Damayan Model House</h3>
                        <p class="damayan-text">
                            We work closely with the Damayan Community in Floodway, Taytay, Rizal, a community that has demonstrated remarkable resilience despite facing challenges such as flooding, economic instability, and limited access to resources. Through the development of the Damayan Model House, we have helped transform a flood-prone environment into a safer and more stable space.
                        </p>
                        <p class="text-muted small mt-2">
                            <i class="ti ti-click"></i> Click the photo to see more images
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================
    DAMAYAN CAROUSEL MODAL — 10 images, SIMPLE controls,
    NO black background, 10 ORANGE indicator circles BELOW photos
    ============================================ -->
    <div class="modal fade damayan-carousel-modal" id="damayanCarouselModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #c25328; font-weight: 700;">Damayan Model House Gallery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding-bottom: 8px;">
                    <div id="damayanCarousel" class="carousel slide" data-bs-ride="carousel">

                        <!-- SLIDES -->
                        <div class="carousel-inner" style="border-radius:12px;">
                            @for($i = 1; $i <= 10; $i++)
                                @php
                                    $jpgPath = "public/images/hm{$i}.jpg";
                                    $pngPath = "public/images/hm{$i}.png";
                                    $imageExists = file_exists(public_path("images/hm{$i}.jpg")) || file_exists(public_path("images/hm{$i}.png"));
                                    $src = file_exists(public_path("images/hm{$i}.jpg")) ? $jpgPath : (file_exists(public_path("images/hm{$i}.png")) ? $pngPath : '');
                                @endphp
                                <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                                    @if($imageExists && $src)
                                        <img src="{{ asset($src) }}"
                                        class="d-block w-100"
                                        alt="Damayan House {{ $i }}">
                                    @else
                                        <div class="d-flex align-items-center justify-content-center" style="height:400px; background:#e9ecef; color:#6c757d; font-size:1.2rem; border-radius:12px;">
                                            📷 Image hm{{ $i }} not available
                                        </div>
                                    @endif
                                </div>
                            @endfor
                        </div>

                        <!-- INDICATORS — placed AFTER the slides (below) -->
                        <div class="carousel-indicators">
                            @for($i = 0; $i < 10; $i++)
                                <button type="button"
                                data-bs-target="#damayanCarousel"
                                data-bs-slide-to="{{ $i }}"
                                class="{{ $i == 0 ? 'active' : '' }}"
                                aria-label="Slide {{ $i + 1 }}"></button>
                            @endfor
                        </div>

                        <!-- SIMPLE Prev / Next — NO black background -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#damayanCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#damayanCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================
    UPDATES SECTION - RED CARDS / ORANGE TITLE
    ============================================ -->
    @if($updates->count() > 0)
    <div class="container mt-5">
        <h2 class="section-title updates-title text-center">Latest Updates</h2>
        <div class="row">
            @foreach($updates as $update)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm update-card"
                data-bs-toggle="modal"
                data-bs-target="#updateModal"
                data-title="{{ $update->title }}"
                data-content="{{ $update->content }}"
                data-image="{{ $update->image ? asset('public/images/uploads/updates/' . $update->image) : '' }}"
                data-category="{{ ucfirst(str_replace('_', ' ', $update->category)) }}"
                data-date="{{ $update->created_at->format('M d, Y') }}">
                <div class="update-image-wrapper">
                    @if($update->image)
                    <img src="{{ asset('public/images/uploads/updates/' . $update->image) }}"
                    alt="{{ $update->title }}"
                    class="update-image">
                    @endif
                </div>
                <div class="card-body">
                    <span class="badge bg-warning mb-2">
                        {{ ucfirst(str_replace('_', ' ', $update->category)) }}
                    </span>
                    <h5 class="card-title">{{ $update->title }}</h5>
                    <p class="card-text">{{ Str::limit($update->content, 80) }}</p>
                    <small class="text-muted">{{ $update->created_at->format('M d, Y') }}</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif

<!-- ============================================
UPDATE MODAL
============================================ -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img id="modalImage" src="" alt="Update Image" class="modal-image">
                    </div>
                    <div class="col-md-6">
                        <span id="modalCategory" class="modal-category"></span>
                        <h2 id="modalTitle" class="modal-title"></h2>
                        <p id="modalContent" class="modal-content-text"></p>
                        <p id="modalDate" class="modal-date"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ============================================
WISHLIST SECTION - BLUE CARDS / ORANGE TITLE
============================================ -->
@if($wishlist->count() > 0)
<div class="container mt-5">
    <h2 class="section-title wishlist-title text-center">Community Wishlist</h2>
    <p class="text-center text-muted">Items needed for our community projects</p>
    <div class="row">
        @foreach($wishlist as $item)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm wishlist-card">
                <div class="wishlist-image-wrapper">
                    @if($item->image)
                    <img src="{{ asset('public/images/uploads/wishlist/' . $item->image) }}"
                    alt="{{ $item->item_name }}"
                    class="wishlist-image">
                    @else
                    <div class="wishlist-placeholder">
                        <span class="placeholder-icon">📦</span>
                    </div>
                    @endif
                </div>
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
PARTNERSHIPS SECTION - GREEN CARDS / ORANGE TITLE
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
FOOTER — updated tagline color
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
                <p class="small footer-tagline">A space of Resiliency, Hope, and Community</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>

<script>
    // Populate modal with data from clicked card
    document.addEventListener('DOMContentLoaded', function() {
        const updateCards = document.querySelectorAll('.update-card');
        updateCards.forEach(card => {
            card.addEventListener('click', function() {
                const title = this.dataset.title;
                const content = this.dataset.content;
                const image = this.dataset.image;
                const category = this.dataset.category;
                const date = this.dataset.date;

                document.getElementById('modalTitle').textContent = title;
                document.getElementById('modalContent').textContent = content;
                document.getElementById('modalCategory').textContent = category;
                document.getElementById('modalDate').textContent = date;

                const modalImage = document.getElementById('modalImage');
                if (image) {
                    modalImage.src = image;
                    modalImage.style.display = 'block';
                } else {
                    modalImage.style.display = 'none';
                }
            });
        });

        // Sync indicator dots with carousel slide change
        const carousel = document.getElementById('damayanCarousel');
        if (carousel) {
            carousel.addEventListener('slid.bs.carousel', function(e) {
                const index = e.to;
                const buttons = this.querySelectorAll('.carousel-indicators button');
                buttons.forEach((btn, i) => {
                    btn.classList.toggle('active', i === index);
                });
            });
        }
    });
</script>

</body>
</html>
