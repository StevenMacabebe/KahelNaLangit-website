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
            border: 3px solid #e67e22;
            border-radius: 10px;
            padding: 5px;
            background: white;
        }
        .current-image-label {
            font-weight: bold;
            color: #e67e22;
        }
        .upload-hint {
            color: #7f8c8d;
            font-size: 12px;
        }
        .file-input-wrapper {
            position: relative;
            margin-top: 10px;
        }
        .file-input-wrapper input[type="file"] {
            padding: 10px;
            border: 2px dashed #e67e22;
            border-radius: 10px;
            background: #fef9e7;
            width: 100%;
        }
        .file-input-wrapper input[type="file"]:hover {
            background: #fdebd0;
        }
        .image-preview-container {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 10px;
            text-align: center;
        }
        .no-image-placeholder {
            color: #bdc3c7;
            font-size: 14px;
            padding: 20px;
            border: 2px dashed #bdc3c7;
            border-radius: 10px;
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
                                <strong>✅ Success!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show">
                                <strong>❌ Error!</strong> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <strong>❌ Please fix the following errors:</strong>
                                <ul class="mb-0 mt-2">
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
<div class="mb-3">
    <label for="gcash_qr" class="form-label">GCash QR Code</label>
    
    @if(isset($donation) && $donation->gcash_qr)
        <div class="mb-2">
            <img src="{{ asset('images/uploads/donations/' . $donation->gcash_qr) }}" 
                 alt="GCash QR" 
                 style="max-width: 200px; border: 2px solid #e67e22; border-radius: 10px; padding: 5px;">
        </div>
    @else
        <p class="text-muted">No QR code uploaded yet.</p>
    @endif
    
    <input type="file" class="form-control" id="gcash_qr" name="gcash_qr" accept="image/*">
    <small class="text-muted">Accepted formats: JPG, PNG. Max size: 2MB.</small>
</div>
                                
                                <!-- Image Preview (new upload) -->
                                <div id="new-image-preview" style="display: none;" class="mt-2">
                                    <p class="current-image-label">📸 New Image Preview:</p>
                                    <img id="new-image-preview-img" src="#" alt="Preview" class="preview-image">
                                    <p class="upload-hint">This is your new image. Click Save to confirm.</p>
                                </div>
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
                                <button type="submit" class="btn btn-primary btn-lg">
                                    💾 Save Donation Details
                                </button>
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary btn-lg">
                                    ← Back to Dashboard
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Info Card -->
                <div class="card mt-3">
                    <div class="card-body">
                        <h5>📌 Quick Tips</h5>
                        <ul class="mb-0">
                            <li>QR codes should be square (e.g., 500x500 pixels)</li>
                            <li>Max file size: 2MB</li>
                            <li>Supported formats: JPG, PNG, GIF, WebP</li>
                            <li>The QR code will appear on the <a href="/donate" target="_blank">public donate page</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Preview image before upload
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('new-image-preview');
            const previewImg = document.getElementById('new-image-preview-img');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.style.display = 'none';
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
