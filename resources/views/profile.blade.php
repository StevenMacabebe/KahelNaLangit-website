<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

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
        .wrapper { flex: 1; }

        /* ============================================
           NAVBAR - MATCHES CONTACT PAGE
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
           PAGE HEADER - #8b7ad1
           ============================================ */
        .page-header {
            background: #8b7ad1;
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

        /* ============================================
           CARDS - #8b7ad1 OUTLINE
           ============================================ */
        .card {
            background: #f8f4ed !important;
            border: 3px solid #ffffff !important;
            border-radius: 18px !important;
            box-shadow: 0 0 0 4px #8b7ad1, 0 8px 20px rgba(0,0,0,0.15) !important;
            overflow: hidden;
            transition: all .3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 0 5px #ffffff, 0 12px 25px rgba(0,0,0,.25) !important;
        }

        .card h4 {
            color: #8b7ad1;
            font-weight: 700;
        }

        /* ============================================
           PROFILE AVATAR
           ============================================ */
        .profile-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #8b7ad1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            color: white;
            margin: 0 auto 15px;
        }

        .profile-name {
            color: #8b7ad1;
            font-weight: 700;
            font-size: 20px;
        }

        .profile-email {
            color: #6c757d;
            font-size: 14px;
        }

        /* ============================================
           FOOTER - MATCHES CONTACT PAGE
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

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 768px) {
            .page-header h1 { font-size: 2rem; }
        }
    </style>
</head>
<body>

<div class="wrapper">

    <!-- ============================================
         NAVIGATION - MATCHES CONTACT PAGE
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
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/donate">Donate</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/profile">Profile</a></li>

                    @auth
                        <li class="nav-item">
                            <form method="POST" action="/logout" class="d-inline">
                                @csrf
                                <button type="submit" class="nav-link btn-login" style="border:none; cursor:pointer;">Logout</button>
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
         PAGE HEADER - #8b7ad1
         ============================================ -->
    <div class="page-header">
        <div class="container">
            <h1>My Profile</h1>
            <p class="lead">Welcome back, {{ $user->name }}!</p>
        </div>
    </div>

    <!-- ============================================
         PROFILE CONTENT - VERTICAL LAYOUT
         ============================================ -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card shadow-sm text-center">
                    <div class="card-body">
                        <!-- Avatar -->
                        <div class="profile-avatar">👤</div>

                        <!-- Name & Email at the top -->
                        <h5 class="profile-name">{{ $user->name }}</h5>
                        <p class="profile-email">{{ $user->email }}</p>
                        <span class="badge bg-success">Verified User</span>

                        <hr>

                        <!-- Account Information below -->
                        <h4>Account Information</h4>
                        <hr>
                        <p><strong>Name:</strong> {{ $user->name }}</p>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <p><strong>Member Since:</strong> {{ $user->created_at->format('F d, Y') }}</p>
                        @if($user->loginLogs)
                            <p><strong>Total Logins:</strong> {{ $user->loginLogs->count() }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- ============================================
     FOOTER - MATCHES CONTACT PAGE
     ============================================ -->
<footer>
    <div class="container">
        <p class="mb-0">© 2026 Kahel na Langit. All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
