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
            font-family: 'Segoe UI', sans-serif;
        }

        .sidebar {
            min-height: 100vh;
            background: #c25328;
            padding: 0;
            box-shadow: 2px 0 10px rgba(0,0,0,.08);
        }

        .sidebar h4 {
            font-weight: 700;
            letter-spacing: .5px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 14px 20px;
            transition: .25s ease;
        }

        .sidebar a:hover {
            background: rgba(255,255,255,.12);
        }

        .sidebar .active {
            background: #365fa9;
            font-weight: 600;
        }

        .dashboard-title {
            color: #c25328;
            font-weight: 700;
        }

        .welcome-badge {
            background: #c25328;
            color: white;
            padding: 10px 18px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 500;
        }

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

        .btn-logout {
            background: #930000;
            border: none;
            color: white;
        }

        .btn-logout:hover {
            background: #770000;
            color: white;
        }

    /* Shared Image Styles */
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

    /* Thumbnail Images */
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

<div class="container-fluid">
    <div class="row">

        <div class="col-md-3 sidebar p-0">

            <div class="p-3">
                <h4 class="text-white">
                    Kahel na Langit
                </h4>

                <hr class="border-light">
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

            <hr class="border-light">

            <form method="POST"
                  action="{{ route('admin.logout') }}"
                  class="p-3">
                @csrf

                <button type="submit"
                        class="btn btn-logout w-100">
                    Logout
                </button>
            </form>

        </div>

        <div class="col-md-9 p-4">
            @yield('content')
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')

</body>
</html>