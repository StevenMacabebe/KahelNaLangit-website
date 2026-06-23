<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Wishlist Item - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar { min-height: 100vh; background: #34495e; padding: 0; }
        .sidebar a { color: white; text-decoration: none; display: block; padding: 12px 20px; }
        .sidebar a:hover { background: #2c3e50; }
        .sidebar .active { background: #e67e22; }
        .navbar { background: #2c3e50 !important; }
        .preview-image { max-width: 150px; max-height: 150px; border-radius: 10px; border: 2px solid #e67e22; padding: 5px; object-fit: cover; }
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
                <a href="{{ route('admin.partnerships.index') }}">🤝 Partnerships</a>
                <a href="{{ route('admin.wishlist.index') }}" class="active">📋 Wishlist</a>
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
                        <h2>Edit Wishlist Item</h2>

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

                        <form method="POST" action="{{ route('admin.wishlist.update', $item->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="item_name" class="form-label">Item Name</label>
                                <input type="text" class="form-control" id="item_name" name="item_name" value="{{ $item->item_name }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ $item->description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="quantity_needed" class="form-label">Quantity Needed</label>
                                <input type="number" class="form-control" id="quantity_needed" name="quantity_needed" value="{{ $item->quantity_needed }}" required min="1">
                            </div>

                            <div class="mb-3">
                                <label for="quantity_received" class="form-label">Quantity Received</label>
                                <input type="number" class="form-control" id="quantity_received" name="quantity_received" value="{{ $item->quantity_received }}" min="0">
                            </div>

                            <!-- Image Upload -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Item Image</label>
                                
                                @if($item->image)
                                    <div class="mb-2">
                                        <p class="current-image-label">✅ Current Image:</p>
                                        <img src="{{ asset('public/images/uploads/wishlist/' . $item->image) }}" 
                                             alt="{{ $item->item_name }}" 
                                             class="preview-image">
                                    </div>
                                @endif
                                
                                <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)">
                                <small class="upload-hint">Upload a new image to replace the current one. Max 2MB. Square recommended.</small>
                            </div>

                            <div id="image-preview" style="display: none;" class="mb-3">
                                <p class="current-image-label">📸 New Image Preview:</p>
                                <img id="image-preview-img" src="#" alt="Preview" class="preview-image">
                            </div>

                            <button type="submit" class="btn btn-primary">Update Item</button>
                            <a href="{{ route('admin.wishlist.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('image-preview');
            const previewImg = document.getElementById('image-preview-img');
            
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
