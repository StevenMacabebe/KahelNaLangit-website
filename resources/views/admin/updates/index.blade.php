<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Updates - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar { min-height: 100vh; background: #34495e; padding: 0; }
        .sidebar a { color: white; text-decoration: none; display: block; padding: 12px 20px; }
        .sidebar a:hover { background: #2c3e50; }
        .sidebar .active { background: #e67e22; }
        .navbar { background: #2c3e50 !important; }
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
                <a href="{{ route('admin.updates.index') }}" class="active">📝 Updates</a>
                <a href="{{ route('admin.partnerships.index') }}">🤝 Partnerships</a>
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
                    <h2>Manage Updates</h2>
                    <a href="{{ route('admin.updates.create') }}" class="btn btn-primary">➕ Create New Update</a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Event Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($updates as $update)
                                    <tr>
                                        <td>{{ $update->title }}</td>
                                        <td>
                                            <span class="badge bg-{{ $update->category === 'announcement' ? 'warning' : 'info' }}">
                                                {{ ucfirst(str_replace('_', ' ', $update->category)) }}
                                            </span>
                                        </td>
                                        <td>{{ $update->event_date ?? 'N/A' }}</td>
                                        <td>
                                            <a href="{{ route('admin.updates.edit', $update->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form method="POST" action="{{ route('admin.updates.destroy', $update->id) }}" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this update?')">Delete</button>
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