<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Panel')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #faf7e5;
            font-family: 'Poppins', sans-serif;
        }

        /* Headings */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .dashboard-title,
        .card h5 {
            font-family: 'Aggrandir', sans-serif;
            font-weight: 700;
        }

        /* Navbar */
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

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: -280px;
            width: 280px;
            height: 100vh;
            background: #c25328;
            transition: .3s ease;
            z-index: 1050;
            overflow-y: auto;
            box-shadow: 2px 0 10px rgba(0,0,0,.15);
        }

        .sidebar.show {
            left: 0;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 15px 20px;
            border-bottom: 1px solid rgba(255,255,255,.15);
            position: sticky;
            top: 0;
            background: #c25328;
            z-index: 2;
        }

        .sidebar-menu-btn {
            margin: 0;
            color: white;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 14px 20px;
            transition: .25s ease;
            font-family: 'Poppins', sans-serif;
        }

        .sidebar a:hover {
            background: rgba(255,255,255,.12);
        }

        .sidebar .active {
            background: #365fa9;
            font-weight: 600;
        }

        .sidebar-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,.4);
            display: none;
            z-index: 1040;
        }

        .sidebar-overlay.show {
            display: block;
        }

        .menu-btn {
            background: transparent;
            border: none;
            color: #faf7e5;
            font-size: 24px;
            margin-right: 12px;
        }

        /* Page Header */
        .page-header {
            color: #faf7e5;
            padding: 40px 0 32px;
            margin-bottom: 24px;
        }

        .page-header h1 {
            font-weight: 700;
        }

        .page-header .lead {
            opacity: 0.85;
            font-size: 15px;
        }

        .header-partnerships {
            background: #658107;
        }

        .header-updates {
            background: #930000;
        }

        .header-wishlist {
            background: #eab000;
        }

        .header-pending-inquiries,
        .header-inquiries {
            background: #89479a;
        }

        .header-dashboard,
        .header-donations,
        .header-my-profile {
            background: #365fa9;
        }

        .welcome-badge {
            background: rgba(255,255,255,.15);
            color: white;
            padding: 10px 18px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 500;
        }

        /* Content */
        .content-area {
            min-height: 100vh;
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 16px;
            background: #ffffff;
            box-shadow: 0 4px 12px rgba(0,0,0,.08);
        }

        .card h5 {
            color: #c25328;
            font-weight: 700;
        }

        .btn-primary-action {
            background: #365fa9;
            border: none;
            color: white;
        }

        .btn-primary-action:hover {
            background: #2b4f92;
            color: white;
        }

        /* Images */
        .preview-image {
            max-width: 150px;
            max-height: 150px;
            border-radius: 10px;
            border: 2px solid #c25328;
            padding: 5px;
            object-fit: cover;
        }

        .preview-banner {
            max-width: 100%;
            max-height: 200px;
            border-radius: 10px;
            border: 2px solid #c25328;
            padding: 5px;
            object-fit: cover;
        }

        .current-image-label {
            font-weight: 600;
            color: #c25328;
        }

        .upload-hint {
            color: #7f8c8d;
            font-size: 12px;
        }

        .update-thumb {
            max-width: 100px;
            max-height: 60px;
            object-fit: cover;
            border-radius: 5px;
            border: 2px solid #c25328;
            padding: 2px;
        }

        .logo-thumb {
            max-width: 50px;
            max-height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .banner-thumb {
            max-width: 100px;
            max-height: 50px;
            object-fit: cover;
            border-radius: 5px;
        }

        .item-thumb {
            max-width: 60px;
            max-height: 60px;
            border-radius: 10px;
            object-fit: cover;
            border: 2px solid #c25328;
            padding: 2px;
        }
    </style>

    @stack('styles')
</head>
<body>

@php
    $pageTitle = trim($__env->yieldContent('title'));

    $headerClass = match($pageTitle) {
        'Partnerships' => 'header-partnerships',
        'Updates' => 'header-updates',
        'Wishlist' => 'header-wishlist',
        'Pending Inquiries' => 'header-pending-inquiries',
        'Inquiries' => 'header-inquiries',
        'Dashboard' => 'header-dashboard',
        'Donations' => 'header-donations',
        'My Profile' => 'header-my-profile',
        default => 'header-dashboard'
    };
@endphp

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">

        <button class="menu-btn"
                onclick="toggleSidebar()">
            ☰
        </button>

        <div class="ms-auto">
            <form method="POST"
                  action="{{ route('admin.logout') }}">
                @csrf

                <button type="submit"
                        class="nav-link btn-login border-0">
                    Logout
                </button>
            </form>
        </div>

    </div>
</nav>

<div class="sidebar-overlay"
     id="sidebarOverlay"
     onclick="toggleSidebar()">
</div>

<div class="sidebar"
     id="sidebar">

    <div class="sidebar-header">
        <button class="menu-btn sidebar-menu-btn"
            onclick="toggleSidebar()">
        ☰
        </button>
    </div>

    <a href="{{ route('admin.dashboard') }}"
       class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        Dashboard
    </a>

    <a href="{{ route('admin.updates.index') }}"
       class="{{ request()->routeIs('admin.updates.*') ? 'active' : '' }}">
        Updates
    </a>

    <a href="{{ route('admin.partnerships.index') }}"
       class="{{ request()->routeIs('admin.partnerships.*') ? 'active' : '' }}">
        Partnerships
    </a>

    <a href="{{ route('admin.wishlist.index') }}"
       class="{{ request()->routeIs('admin.wishlist.*') ? 'active' : '' }}">
        Wishlist
    </a>

    <a href="{{ route('admin.inquiries.index') }}"
       class="{{ request()->routeIs('admin.inquiries.*') ? 'active' : '' }}">
        Inquiries
    </a>

    <a href="{{ route('admin.donations.edit') }}"
       class="{{ request()->routeIs('admin.donations.*') ? 'active' : '' }}">
        Donations
    </a>

    <a href="{{ route('admin.profile') }}"
       class="{{ request()->routeIs('admin.profile') ? 'active' : '' }}">
        My Profile
    </a>

</div>

<div class="content-area">

    <div class="page-header {{ $headerClass }}">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">

                <div>
                    <h1 class="mb-1">
                        {{ $pageTitle }}
                    </h1>

                    <div class="lead">
                        Administrator Panel
                    </div>
                </div>

                <div>
                    <span class="welcome-badge">
                        Welcome,
                        {{ Auth::guard('admin')->user()->full_name }}
                    </span>
                </div>

            </div>

        </div>
    </div>

    <div class="container pb-4">
        @yield('content')
    </div>

</div>

<script>
    function toggleSidebar() {
        document.getElementById('sidebar')
            .classList.toggle('show');

        document.getElementById('sidebarOverlay')
            .classList.toggle('show');
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')

</body>
</html>
