@extends('admin.layouts.app')

@section('title')
    Wishlist
@endsection

@section('description')
    Edit wishlist items and requests.
@endsection

@section('content')

<div class="card">
    <div class="card-body">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST"
            action="{{ route('admin.wishlist.update', $item->id) }}"
            enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="item_name" class="form-label">
                    Item Name
                </label>

            <input type="text"
                class="form-control"
                id="item_name"
                name="item_name"
                value="{{ $item->item_name }}"
                required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">
                    Description
                </label>

            <textarea class="form-control"
                id="description"
                name="description"
                rows="3">{{ $item->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="quantity_needed" class="form-label">
                    Quantity Needed
                </label>

                <input type="number"
                    class="form-control"
                    id="quantity_needed"
                    name="quantity_needed"
                    value="{{ $item->quantity_needed }}"
                    required
                    min="1">
            </div>

            <div class="mb-3">
                <label for="quantity_received" class="form-label">
                    Quantity Received (Optional)
                </label>

                <input type="number"
                    class="form-control"
                    id="quantity_received"
                    name="quantity_received"
                    value="{{ $item->quantity_received }}"
                    min="0">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">
                    Item Image (Square)
                </label>

                @if($item->image)
                    <div class="mb-2">
                        <p class="current-image-label">
                            Current Image:
                        </p>

                        <img src="{{ asset('public/images/uploads/wishlist/' . $item->image) }}"
                            alt="{{ $item->item_name }}"
                            class="preview-image">
                    </div>
                @endif

                <input type="file"
                    class="form-control"
                    id="image"
                    name="image"
                    accept="image/*"
                    onchange="previewImage(event)">

                <small class="upload-hint">
                    Upload a new image to replace the current one.
                    Max 2MB. Square image recommended.
                </small>
            </div>

            <div id="image-preview"
                 style="display: none;"
                 class="mb-3">

                <p class="current-image-label">
                    New Image Preview:
                </p>

                <img id="image-preview-img"
                     src="#"
                     alt="Preview"
                     class="preview-image">
            </div>

            <div class="btn-group-admin">

                <button type="submit"
                        class="btn btn-primary">
                    Update Item
                </button>

                <a href="{{ route('admin.wishlist.index') }}"
                class="btn btn-secondary">
                    Cancel
                </a>

            </div>

        </form>

    </div>
</div>

@endsection

@push('scripts')
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
@endpush