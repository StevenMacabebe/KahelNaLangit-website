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
        .preview-image { 
            max-width: 200px; 
            max-height: 200px; 
            margin-top: 10px;
            border: 2px solid #e67e22;
            border-radius: 10px;
            padding: 5px;
        }
        .current-image-label {
            font-weight: bold;
            color: #e67e22;
        }
        .upload-hint {
            color: #7f8c8d;
            font-size: 12px;
        }
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
                <a href="{{ route('admin.profile') }}">👤 My Profile</a>
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
                        <h2>💰 Manage Donation Channels</h2>
                        <p class="text-muted">Update bank details, GCash information, and donation guidelines.</p>

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('admin.donations.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Bank 1 -->
                            <h4 class="mt-3 border-bottom pb-2">🏦 Bank 1</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="bank1_name" class="form-label">Bank Name</label>
                                        <input type="text" class="form-control" id="bank1_name" name="bank1_name" value="{{ $donation->bank1_name ?? '' }}" placeholder="e.g., BDO Unibank">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="bank1_account_name" class="form-label">Account Name</label>
                                        <input type="text" class="form-control" id="bank1_account_name" name="bank1_account_name" value="{{ $donation->bank1_account_name ?? '' }}" placeholder="e.g., Kahel na Langit Foundation">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="bank1_account_number" class="form-label">Account Number</label>
                                <input type="text" class="form-control" id="bank1_account_number" name="bank1_account_number" value="{{ $donation->bank1_account_number ?? '' }}" placeholder="e.g., 1234-5678-9012">
                            </div>

                            <!-- Bank 2 -->
                            <h4 class="mt-3 border-bottom pb-2">🏦 Bank 2</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="bank2_name" class="form-label">Bank Name</label>
                                        <input type="text" class="form-control" id="bank2_name" name="bank2_name" value="{{ $donation->bank2_name ?? '' }}" placeholder="e.g., BPI">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="bank2_account_name" class="form-label">Account Name</label>
                                        <input type="text" class="form-control" id="bank2_account_name" name="bank2_account_name" value="{{ $donation->bank2_account_name ?? '' }}" placeholder="e.g., Kahel na Langit Foundation">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="bank2_account_number" class="form-label">Account Number</label>
                                <input type="text" class="form-control" id="bank2_account_number" name="bank2_account_number" value="{{ $donation->bank2_account_number ?? '' }}" placeholder="e.g., 9876-5432-1098">
                            </div>

                            <!-- GCash -->
                            <h4 class="mt-3 border-bottom pb-2">📱 GCash</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="gcash_name" class="form-label">GCash Account Name</label>
                                        <input type="text" class="form-control" id="gcash_name" name="gcash_name" value="{{ $donation->gcash_name ?? '' }}" placeholder="e.g., Kahel na Langit">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="gcash_number" class="form-label">GCash Number</label>
                                        <input type="text" class="form-control" id="gcash_number" name="gcash_number" value="{{ $donation->gcash_number ?? '' }}" placeholder="e.g., 0912-345-6789">
                                    </div>
                                </div>
                            </div>

                            <!-- QR Code Upload -->
                            <h4 class="mt-3 border-bottom pb-2">📸 GCash QR Code</h4>
                            <div class="mb-3">
                                <label for="gcash_qr" class="form-label">Upload QR Code</label>
                                
                                @if(isset($donation) && $donation->gcash_qr)
                                    <div class="mb-2">
                                        <p class="current-image-label">Current QR Code:</p>
                                        <img src="{{ asset('storage/' . $donation->gcash_qr) }}" alt="GCash QR" class="preview-image">
                                        <p class="upload-hint">Upload a new image to replace the current QR code.</p>
                                    </div>
                                @else
                                    <p class="text-muted">No QR code uploaded yet.</p>
                                @endif
                                
                                <input type="file" class="form-control" id="gcash_qr" name="gcash_qr" accept="image/*">
                                <small class="upload-hint">Accepted formats: JPG, PNG, GIF, WebP. Max size: 2MB.</small>
                            </div>

                            <!-- Donation Guidelines -->
                            <h4 class="mt-3 border-bottom pb-2">📋 Donation Guidelines</h4>
                            <div class="mb-3">
                                <label for="guidelines" class="form-label">Guidelines for Donors</label>
                                <textarea class="form-control" id="guidelines" name="guidelines" rows="4">{{ $donation->guidelines ?? 'Enter donation guidelines here...' }}</textarea>
                                <small class="upload-hint">These guidelines will appear on the public donate page.</small>
                            </div>

                            <!-- Buttons -->
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">
                                    💾 Save Donation Details
                                </button>
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                                    ← Back to Dashboard
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
