@extends('admin.layouts.app')

@section('title', 'Edit Update')

@section('content')

<div class="card">
    <div class="card-body">

        <h2 class="dashboard-title">
            Edit Update
        </h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
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

        <form method="POST"
              action="{{ route('admin.updates.update', $update->id) }}"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">
                    Title
                </label>

                <input type="text"
                       class="form-control"
                       id="title"
                       name="title"
                       value="{{ $update->title }}"
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

                    <option value="announcement"
                        {{ $update->category === 'announcement' ? 'selected' : '' }}>
                        Announcement
                    </option>

                    <option value="project_update"
                        {{ $update->category === 'project_update' ? 'selected' : '' }}>
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
                          required>{{ $update->content }}</textarea>
            </div>

            <div class="mb-3">
                <label for="event_date" class="form-label">
                    Event Date (optional)
                </label>

                <input type="date"
                       class="form-control"
                       id="event_date"
                       name="event_date"
                       value="{{ $update->event_date }}">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">
                    Update Image
                </label>

                @if($update->image)
                    <div class="mb-2">
                        <p class="current-image-label">
                            Current Image:
                        </p>

                        <img src="{{ asset('public/images/uploads/updates/' . $update->image) }}"
                             alt="{{ $update->title }}"
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
                    Upload a new image to replace the current one. Max 2MB.
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

            <button type="submit"
                    class="btn btn-primary-action">
                Update
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