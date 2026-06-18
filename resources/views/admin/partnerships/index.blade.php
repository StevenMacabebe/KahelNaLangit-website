<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Partnerships - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar { min-height: 100vh; background: #34495e; padding: 0; }
        .sidebar a { color: white; text-decoration: none; display: block; padding: 12px 20px; }
        .sidebar a:hover { background: #2c3e50; }
        .sidebar .active { background: #e67e22; }
        .navbar { background: #2c3e50 !important; }
        .logo-thumb { max-width: 50px; max-height: 50px; border-radius: 50%; object-fit: cover; }
        .banner-thumb { max-width: 100px; max-height: 50px; object-fit: cover; border-radius: 5px; }
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
                <a href="{{ route('admin.dashboard') }}">📊 Dashboard</a>
                <a href="{{ route('admin.updates.index') }}">📝 Updates</a>
                <a href="{{ route('admin.partnerships.index') }}" class="active">🤝 Partnerships</a>
                <a href="{{ route('admin.wishlist.index') }}">📋 Wishlist</a>
                <a href="{{ route('admin.inquiries.index') }}">✉️ Inquiries</a>
                <a href="{{ route('admin.donations.edit') }}">💰 Donations</a>
                <hr class="border-light">
                <form method="POST" action="{{ route('admin.logout') }}" class="p-3">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100">Logout</button>
                </form>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Manage Partnerships</h2>
                    <a href="{{ route('admin.partnerships.create') }}" class="btn btn-primary">➕ Add Partnership</a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Logo</th>
                                    <th>Banner</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($partnerships as $partnership)
                                    <tr>
                                        <td>
                                            @if($partnership->logo)
                                                <img src="{{ asset('public/images/uploads/partnerships/' . $partnership->logo) }}" 
                                                     alt="{{ $partnership->name }}" 
                                                     class="logo-thumb">
                                            @else
                                                <span class="text-muted">No logo</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($partnership->banner_image)
                                                <img src="{{ asset('public/images/uploads/partnerships/' . $partnership->banner_image) }}" 
                                                     alt="{{ $partnership->name }}" 
                                                     class="banner-thumb">
                                            @else
                                                <span class="text-muted">No banner</span>
                                            @endif
                                        </td>
                                        <td>{{ $partnership->name }}</td>
                                        <td>
                                            <span class="badge bg-{{ $partnership->status === 'current' ? 'success' : 'secondary' }}">
                                                {{ $partnership->status }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.partnerships.edit', $partnership->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form method="POST" action="{{ route('admin.partnerships.destroy', $partnership->id) }}" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this partnership?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">← Back to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
