<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Donations - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar { min-height: 100vh; background: #34495e; padding: 0; }
        .sidebar a { color: white; text-decoration: none; display: block; padding: 12px 20px; }
        .sidebar a:hover { background: #2c3e50; }
        .sidebar .active { background: #e67e22; }
        .navbar { background: #2c3e50 !important; }
        .preview-image { max-width: 200px; max-height: 200px; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar p-0">
                <div class="p-3"><h4 class="text-white">🌅 Kahel na Langit</h4><hr class="border-light"></div>
                <a href="{{ route('admin.dashboard') }}">📊 Dashboard</a>
                <a href="{{ route('admin.updates.index') }}">📝 Updates</a>
                <a href="{{ route('admin.partnerships.index') }}">🤝 Partnerships</a>
                <a href="{{ route('admin.wishlist.index') }}">📋 Wishlist</a>
                <a href="{{ route('admin.inquiries.index') }}">✉️ Inquiries</a>
                <a href="{{ route('admin.donations.edit') }}" class="active">💰 Donations</a>
                <hr class="border-light">
                <form method="POST" action="{{ route('admin.logout') }}" class="p-3">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100">Logout</button>
                </form>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 p-4">
                <div class="card">
                    <div class="card-body">
                        <h2>Manage Donation Channels</h2>

                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form method="POST" action="{{ route('admin.donations.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <h4 class="mt-3">🏦 Bank 1</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="bank1_name" class="form-label">Bank Name</label>
                                        <input type="text" class="form-control" id="bank1_name" name="bank1_name" value="{{ $donation->bank1_name ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="bank1_account_name" class="form-label">Account Name</label>
                                        <input type="text" class="form-control" id="bank1_account_name" name="bank1_account_name" value="{{ $donation->bank1_account_name ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="bank1_account_number" class="form-label">Account Number</label>
                                <input type="text" class="form-control" id="bank1_account_number" name="bank1_account_number" value="{{ $donation->bank1_account_number ?? '' }}">
                            </div>

                            <h4 class="mt-3">🏦 Bank 2</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="bank2_name" class="form-label">Bank Name</label>
                                        <input type="text" class="form-control" id="bank2_name" name="bank2_name" value="{{ $donation->bank2_name ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="bank2_account_name" class="form-label">Account Name</label>
                                        <input type="text" class="form-control" id="bank2_account_name" name="bank2_account_name" value="{{ $donation->bank2_account_name ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="bank2_account_number" class="form-label">Account Number</label>
                                <input type="text" class="form-control" id="bank2_account_number" name="bank2_account_number" value="{{ $donation->bank2_account_number ?? '' }}">
                            </div>

                            <h4 class="mt-3">📱 GCash</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="gcash_name" class="form-label">GCash Account Name</label>
                                        <input type="text" class="form-control" id="gcash_name" name="gcash_name" value="{{ $donation->gcash_name ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="gcash_number" class="form-label">GCash Number</label>
                                        <input type="text" class="form-control" id="gcash_number" name="gcash_number" value="{{ $donation->gcash_number ?? '' }}">
                                    </div>
                                </div>
                            </div>

                            <!-- QR Code Upload -->
                            <div class="mb-3">
                                <label for="gcash_qr" class="form-label">GCash QR Code</label>
                                @if(isset($donation) && $donation->gcash_qr)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $donation->gcash_qr) }}" alt="GCash QR" class="preview-image">
                                    </div>
                                @endif
                                <input type="file" class="form-control" id="gcash_qr" name="gcash_qr" accept="image/*">
                                <small class="text-muted">Upload a new QR code image (optional, max 2MB)</small>
                            </div>

                            <h4 class="mt-3">📋 Donation Guidelines</h4>
                            <div class="mb-3">
                                <textarea class="form-control" id="guidelines" name="guidelines" rows="4">{{ $donation->guidelines ?? 'Enter donation guidelines here...' }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Save Donation Details</button>
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">← Back to Dashboard</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>