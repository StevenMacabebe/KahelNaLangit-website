<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Kahel na Langit</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #faf7e5;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Sidebar */
        .sidebar {
            min-height: 100vh;
            background: #365fa9;
            padding: 0;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }

        .sidebar h4 {
            font-weight: 700;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 14px 20px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: rgba(255,255,255,0.15);
        }

        .sidebar .active {
            background: #c25328;
            font-weight: 600;
        }

        /* Dashboard Header */
        .dashboard-title {
            color: #365fa9;
            font-weight: 700;
        }

        .welcome-badge {
            background: #c25328;
            color: white;
            padding: 10px 18px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 500;
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 15px;
            background: #ffffff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .card h5 {
            color: #365fa9;
            font-weight: 700;
        }

        /* Stats Cards */
        .stat-card {
            padding: 24px;
            border-radius: 15px;
            color: white;
            box-shadow: 0 4px 12px rgba(0,0,0,0.12);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-4px);
        }

        .stat-card h5 {
            color: white;
            margin-bottom: 10px;
            font-size: 15px;
        }

        .stat-card h3 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 0;
        }

        .updates-card {
            background: #930000;
        }

        .partnership-card {
            background: #658107;
        }

        .wishlist-card {
            background: #eab000;
        }

        .inquiries-card {
            background: #89479a;
        }

        /* Buttons */
        .btn-updates {
            background: #930000;
            color: white;
            border: none;
        }

        .btn-updates:hover {
            background: #770000;
            color: white;
        }

        .btn-partnerships {
            background: #658107;
            color: white;
            border: none;
        }

        .btn-partnerships:hover {
            background: #536b06;
            color: white;
        }

        .btn-wishlist {
            background: #eab000;
            color: white;
            border: none;
        }

        .btn-wishlist:hover {
            background: #d29d00;
            color: white;
        }

        .btn-inquiries {
            background: #89479a;
            color: white;
            border: none;
        }

        .btn-inquiries:hover {
            background: #733a82;
            color: white;
        }

        /* Lists */
        .list-group-item {
            border: none;
            border-bottom: 1px solid #eee;
            background: transparent;
        }

        .list-group-item:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-3 sidebar p-0">

            <div class="p-3">
                <h4 class="text-white">🌅 Kahel na Langit</h4>
                <hr class="border-light">
            </div>

            <a href="{{ route('admin.dashboard') }}" class="active">
                📊 Dashboard
            </a>

            <a href="{{ route('admin.updates.index') }}">
                📝 Updates
            </a>

            <a href="{{ route('admin.partnerships.index') }}">
                🤝 Partnerships
            </a>

            <a href="{{ route('admin.wishlist.index') }}">
                📋 Wishlist
            </a>

            <a href="{{ route('admin.inquiries.index') }}">
                ✉️ Inquiries
            </a>

            <a href="{{ route('admin.donations.edit') }}">
                💰 Donations
            </a>

            <a href="{{ route('admin.profile') }}">
                👤 My Profile
            </a>

            <hr class="border-light">

            <form method="POST" action="{{ route('admin.logout') }}" class="p-3">
                @csrf
                <button type="submit" class="btn btn-danger w-100">
                    Logout
                </button>
            </form>

        </div>

        <!-- Main Content -->
        <div class="col-md-9 p-4">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="dashboard-title">
                    Dashboard
                </h2>

                <span class="welcome-badge">
                    Welcome, {{ Auth::guard('admin')->user()->full_name }}!
                </span>
            </div>

            <!-- Statistics -->
            <div class="row">

                <div class="col-md-3 mb-3">
                    <div class="stat-card updates-card">
                        <h5>Updates</h5>
                        <h3>{{ $updatesCount ?? 0 }}</h3>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="stat-card partnership-card">
                        <h5>Partnerships</h5>
                        <h3>{{ $partnershipsCount ?? 0 }}</h3>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="stat-card wishlist-card">
                        <h5>Wishlist</h5>
                        <h3>{{ $wishlistCount ?? 0 }}</h3>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="stat-card inquiries-card">
                        <h5>Pending Inquiries</h5>
                        <h3>{{ $inquiriesCount ?? 0 }}</h3>
                    </div>
                </div>

            </div>

            <!-- Quick Actions -->
            <div class="card mt-4">
                <div class="card-body">

                    <h5>Quick Actions</h5>

                    <div class="row">

                        <div class="col-md-3 mb-2">
                            <a href="{{ route('admin.updates.create') }}"
                               class="btn btn-updates w-100">
                                ➕ New Update
                            </a>
                        </div>

                        <div class="col-md-3 mb-2">
                            <a href="{{ route('admin.partnerships.create') }}"
                               class="btn btn-partnerships w-100">
                                ➕ New Partnership
                            </a>
                        </div>

                        <div class="col-md-3 mb-2">
                            <a href="{{ route('admin.wishlist.create') }}"
                               class="btn btn-wishlist w-100">
                                ➕ New Wishlist
                            </a>
                        </div>

                        <div class="col-md-3 mb-2">
                            <a href="{{ route('admin.inquiries.index') }}"
                               class="btn btn-inquiries w-100">
                                📩 View Inquiries
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Recent Updates -->
            <div class="card mt-4">
                <div class="card-body">

                    <h5>Recent Updates</h5>

                    @if(isset($recentUpdates) && $recentUpdates->count())

                        <ul class="list-group">

                            @foreach($recentUpdates as $update)

                                <li class="list-group-item d-flex justify-content-between align-items-center">

                                    {{ $update->title }}

                                    <span class="badge bg-secondary">
                                        {{ ucfirst(str_replace('_', ' ', $update->category)) }}
                                    </span>

                                </li>

                            @endforeach

                        </ul>

                    @else

                        <p class="text-muted">
                            No recent updates.
                        </p>

                    @endif

                </div>
            </div>

        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
