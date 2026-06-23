<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Inquiries - Admin</title>
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
            <div class="col-md-3 sidebar p-0">
                <div class="p-3"><h4 class="text-white">🌅 Kahel na Langit</h4><hr class="border-light"></div>
                <a href="{{ route('admin.dashboard') }}">📊 Dashboard</a>
                <a href="{{ route('admin.updates.index') }}">📝 Updates</a>
                <a href="{{ route('admin.partnerships.index') }}">🤝 Partnerships</a>
                <a href="{{ route('admin.wishlist.index') }}">📋 Wishlist</a>
                <a href="{{ route('admin.inquiries.index') }}" class="active">✉️ Inquiries</a>
                <a href="{{ route('admin.donations.edit') }}">💰 Donations</a>
                <hr class="border-light">
                <form method="POST" action="{{ route('admin.logout') }}" class="p-3">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100">Logout</button>
                </form>
            </div>

            <div class="col-md-9 p-4">
                <h2>✉️ Manage Inquiries</h2>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>From</th>
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($inquiries as $inquiry)
                                    <tr>
                                        <td>{{ $inquiry->full_name }}</td>
                                        <td>{{ $inquiry->subject }}</td>
                                        <td>
                                            <span class="badge bg-{{ $inquiry->status === 'pending' ? 'warning' : ($inquiry->status === 'resolved' ? 'success' : 'secondary') }}">
                                                {{ ucfirst($inquiry->status) }}
                                            </span>
                                        </td>
                                        <td>{{ $inquiry->created_at->format('M d, Y') }}</td>
                                        <td>
                                            <a href="{{ route('admin.inquiries.show', $inquiry->id) }}" class="btn btn-info btn-sm">View</a>
                                            <form method="POST" action="{{ route('admin.inquiries.destroy', $inquiry->id) }}" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this inquiry?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>