<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            min-height: 100vh;
            background: #34495e;
            padding: 0;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
        }
        .sidebar a:hover {
            background: #2c3e50;
        }
        .sidebar .active {
            background: #e67e22;
        }
        .stat-card {
            padding: 20px;
            border-radius: 10px;
            color: white;
        }
        .stat-card h3 {
            font-size: 32px;
        }
        .navbar {
            background: #2c3e50 !important;
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
                <a href="{{ route('admin.dashboard') }}" class="active">📊 Dashboard</a>
                <a href="{{ route('admin.updates.index') }}">📝 Updates</a>
                <a href="{{ route('admin.partnerships.index') }}">🤝 Partnerships</a>
                <a href="{{ route('admin.wishlist.index') }}">📋 Wishlist</a>
                <a href="{{ route('admin.inquiries.index') }}">✉️ Inquiries</a>
                <a href="{{ route('admin.donations.edit') }}">💰 Donations</a>
                <a href="{{ route('admin.profile') }}">👤 My Profile</a>  <!-- 👈 ADDED PROFILE LINK -->
                <hr class="border-light">
                <form method="POST" action="{{ route('admin.logout') }}" class="p-3">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100">Logout</button>
                </form>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Dashboard</h2>
                    <span class="badge bg-success">
                        Welcome, {{ Auth::guard('admin')->user()->full_name }}!
                    </span>
                </div>

                <!-- Statistics Cards -->
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="stat-card bg-primary">
                            <h5>Updates</h5>
                            <h3>{{ $updatesCount ?? 0 }}</h3>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="stat-card bg-success">
                            <h5>Partnerships</h5>
                            <h3>{{ $partnershipsCount ?? 0 }}</h3>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="stat-card bg-warning">
                            <h5>Wishlist</h5>
                            <h3>{{ $wishlistCount ?? 0 }}</h3>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="stat-card bg-danger">
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
                                <a href="{{ route('admin.updates.create') }}" class="btn btn-primary w-100">➕ New Update</a>
                            </div>
                            <div class="col-md-3 mb-2">
                                <a href="{{ route('admin.partnerships.create') }}" class="btn btn-success w-100">➕ New Partnership</a>
                            </div>
                            <div class="col-md-3 mb-2">
                                <a href="{{ route('admin.wishlist.create') }}" class="btn btn-warning w-100 text-white">➕ New Wishlist</a>
                            </div>
                            <div class="col-md-3 mb-2">
                                <a href="{{ route('admin.inquiries.index') }}" class="btn btn-danger w-100">📩 View Inquiries</a>
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
                                        <span class="badge bg-{{ $update->category === 'announcement' ? 'warning' : 'info' }}">
                                            {{ ucfirst(str_replace('_', ' ', $update->category)) }}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-muted">No recent updates.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>