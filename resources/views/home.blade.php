<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Kahel na Langit</title>
    <link href="https://fonts.googleapis.com/css2?family=Schoolbell&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/views/css/home.css') }}">
</head>
<body>

    <!-- ============================================
         NAVIGATION - BRAND LEFT, LINKS RIGHT
         ============================================ -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">

            <!-- LEFT: Brand -->
            <a class="navbar-brand" href="/">Kahel na Langit</a>

            <!-- Toggler for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- RIGHT: All nav links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/partnerships">Partnerships</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/donate">Donate</a></li>

                    <!-- Login/Register - same style as nav links -->
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
         HERO SECTION
         ============================================ -->
    <section class="hero" style="background: url('{{ asset('public/images/hero.png') }}') center/cover no-repeat;">
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

    <!-- Rest of your sections... -->
    <!-- Features, Updates, Wishlist, Partnerships, Footer -->
</body>
</html>
