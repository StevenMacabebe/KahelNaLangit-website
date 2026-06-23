<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Partnership - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar { min-height: 100vh; background: #34495e; padding: 0; }
        .sidebar a { color: white; text-decoration: none; display: block; padding: 12px 20px; }
        .sidebar a:hover { background: #2c3e50; }
        .sidebar .active { background: #e67e22; }
        .navbar { background: #2c3e50 !important; }
        .preview-image { max-width: 150px; max-height: 150px; border-radius: 10px; border: 2px solid #e67e22; padding: 5px; }
        .preview-banner { max-width: 100%; max-height: 200px; border-radius: 10px; border: 2px solid #e67e22; padding: 5px; }
        .current-image-label { font-weight: bold; color: #e67e22; }
        .upload-hint { color: #7f8c8d; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 sidebar p-0">
                <div class="p-3"><h4 class="text-white">🌅 Kahel na Langit</h4><hr class="border-light"></div>
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

            <div class="col-md-9 p-4">
                <div class="card">
                    <div class="card-body">
                        <h2>Edit Partnership</h2>

                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
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

                        <form method="POST" action="{{ route('admin.partnerships.update', $partnership->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">Organization Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $partnership->name }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4">{{ $partnership->description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="website" class="form-label">Website URL</label>
                                <input type="text" class="form-control" id="website" name="website" value="{{ $partnership->website }}">
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="current" {{ $partnership->status === 'current' ? 'selected' : '' }}>Current</option>
                                    <option value="past" {{ $partnership->status === 'past' ? 'selected' : '' }}>Past</option>
                                </select>
                            </div>

                            <!-- Logo Upload -->
                            <div class="mb-3">
                                <label for="logo" class="form-label">Partnership Logo</label>
                                
                                @if($partnership->logo)
                                    <div class="mb-2">
                                        <p class="current-image-label">✅ Current Logo:</p>
                                        <img src="{{ asset('public/images/uploads/partnerships/' . $partnership->logo) }}" 
                                             alt="Logo" 
                                             class="preview-image">
                                    </div>
                                @endif
                                
                                <input type="file" class="form-control" id="logo" name="logo" accept="image/*" onchange="previewLogo(event)">
                                <small class="upload-hint">Upload a new logo to replace the current one. Max 2MB.</small>
                            </div>

                            <div id="logo-preview" style="display: none;" class="mb-3">
                                <p class="current-image-label">📸 New Logo Preview:</p>
                                <img id="logo-preview-img" src="#" alt="Logo Preview" class="preview-image">
                            </div>

                            <!-- Banner Image Upload -->
                            <div class="mb-3">
                                <label for="banner_image" class="form-label">Banner Image (Landscape)</label>
                                
                                @if($partnership->banner_image)
                                    <div class="mb-2">
                                        <p class="current-image-label">✅ Current Banner:</p>
                                        <img src="{{ asset('public/images/uploads/partnerships/' . $partnership->banner_image) }}" 
                                             alt="Banner" 
                                             class="preview-banner">
                                    </div>
                                @endif
                                
                                <input type="file" class="form-control" id="banner_image" name="banner_image" accept="image/*" onchange="previewBanner(event)">
                                <small class="upload-hint">Upload a new banner to replace the current one. Max 5MB. Recommended: 1200x600px.</small>
                            </div>

                            <div id="banner-preview" style="display: none;" class="mb-3">
                                <p class="current-image-label">📸 New Banner Preview:</p>
                                <img id="banner-preview-img" src="#" alt="Banner Preview" class="preview-banner">
                            </div>

                            <button type="submit" class="btn btn-primary">Update Partnership</button>
                            <a href="{{ route('admin.partnerships.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewLogo(event) {
            const input = event.target;
            const preview = document.getElementById('logo-preview');
            const previewImg = document.getElementById('logo-preview-img');
            
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

        function previewBanner(event) {
            const input = event.target;
            const preview = document.getElementById('banner-preview');
            const previewImg = document.getElementById('banner-preview-img');
            
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
