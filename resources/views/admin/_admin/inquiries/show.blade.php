<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Inquiry - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar { min-height: 100vh; background: #34495e; padding: 0; }
        .sidebar a { color: white; text-decoration: none; display: block; padding: 12px 20px; }
        .sidebar a:hover { background: #2c3e50; }
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
                <div class="card">
                    <div class="card-body">
                        <h2>Inquiry Details</h2>
                        <hr>
                        <p><strong>From:</strong> {{ $inquiry->full_name }}</p>
                        <p><strong>Email:</strong> {{ $inquiry->user->email ?? 'N/A' }}</p>
                        <p><strong>Contact:</strong> {{ $inquiry->contact_number ?? 'N/A' }}</p>
                        <p><strong>Subject:</strong> {{ $inquiry->subject }}</p>
                        <p><strong>Status:</strong> 
                            <span class="badge bg-{{ $inquiry->status === 'pending' ? 'warning' : ($inquiry->status === 'resolved' ? 'success' : 'secondary') }}">
                                {{ ucfirst($inquiry->status) }}
                            </span>
                        </p>
                        <p><strong>Date:</strong> {{ $inquiry->created_at->format('F d, Y h:i A') }}</p>
                        <hr>
                        <h5>Message:</h5>
                        <p>{{ $inquiry->message }}</p>
                        <hr>
                        <form method="POST" action="{{ route('admin.inquiries.update', $inquiry->id) }}" class="d-inline">
                            @csrf
                            @method('PUT')
                            <select name="status" class="form-select d-inline w-auto">
                                <option value="pending" {{ $inquiry->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="resolved" {{ $inquiry->status === 'resolved' ? 'selected' : '' }}>Resolved</option>
                                <option value="archived" {{ $inquiry->status === 'archived' ? 'selected' : '' }}>Archived</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Update Status</button>
                        </form>
                        <a href="{{ route('admin.inquiries.index') }}" class="btn btn-secondary">← Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>