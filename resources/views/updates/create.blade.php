@extends('admin.layouts.app')

@section('title', 'Create Update')

@section('content')

<div class="card">
    <div class="card-body">

        <h2 class="dashboard-title">
            Create New Update
        </h2>

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
              action="{{ route('admin.updates.store') }}"
              enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">
                    Title
                </label>

                <input type="text"
                       class="form-control"
                       id="title"
                       name="title"
                       required>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">
                    Category
                </label>

                <select class="form-control"
                        id="category"
                        name="category"
                        required>
                    <option value="announcement">
                        Announcement
                    </option>

                    <option value="project_update">
                        Project Update
                    </option>
                </select>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">
                    Content
                </label>

                <textarea class="form-control"
                          id="content"
                          name="content"
                          rows="8"
                          required></textarea>
            </div>

            <div class="mb-3">
                <label for="event_date" class="form-label">
                    Event Date (optional)
                </label>

                <input type="date"
                       class="form-control"
                       id="event_date"
                       name="event_date">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">
                    Update Image
                </label>

                <input type="file"
                       class="form-control"
                       id="image"
                       name="image"
                       accept="image/*"
                       onchange="previewImage(event)">

                <small class="upload-hint">
                    Accepted formats: JPG, PNG. Max size: 2MB.
                    Recommended: 1200x600px.
                </small>
            </div>

            <div id="image-preview"
                 style="display: none;"
                 class="mb-3">

                <p class="current-image-label">
                    📸 Image Preview:
                </p>

                <img id="image-preview-img"
                     src="#"
                     alt="Preview"
                     class="preview-image">
            </div>

            <button type="submit"
                    class="btn btn-primary-action">
                Save Update
            </button>

            <a href="{{ route('admin.updates.index') }}"
               class="btn btn-secondary">
                Cancel
            </a>

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