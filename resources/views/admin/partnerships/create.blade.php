@extends('admin.layouts.app')

@section('title', 'Add Partnership')

@section('content')

<div class="card">
    <div class="card-body">

        <h2 class="dashboard-title">
            Add New Partnership
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
              action="{{ route('admin.partnerships.store') }}"
              enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">
                    Organization Name
                </label>

                <input type="text"
                       class="form-control"
                       id="name"
                       name="name"
                       required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">
                    Description
                </label>

                <textarea class="form-control"
                          id="description"
                          name="description"
                          rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label for="website" class="form-label">
                    Website URL
                </label>

                <input type="text"
                       class="form-control"
                       id="website"
                       name="website">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">
                    Status
                </label>

                <select class="form-control"
                        id="status"
                        name="status">

                    <option value="current">
                        Current
                    </option>

                    <option value="past">
                        Past
                    </option>

                </select>
            </div>

            <div class="mb-3">
                <label for="logo" class="form-label">
                    Partnership Logo
                </label>

                <input type="file"
                       class="form-control"
                       id="logo"
                       name="logo"
                       accept="image/*"
                       onchange="previewLogo(event)">

                <small class="upload-hint">
                    Accepted formats: JPG, PNG. Max size: 2MB.
                    Square image recommended.
                </small>
            </div>

            <div id="logo-preview"
                 style="display: none;"
                 class="mb-3">

                <p class="current-image-label">
                    Logo Preview:
                </p>

                <img id="logo-preview-img"
                     src="#"
                     alt="Logo Preview"
                     class="preview-image">
            </div>

            <div class="mb-3">
                <label for="banner_image" class="form-label">
                    Banner Image (Landscape)
                </label>

                <input type="file"
                       class="form-control"
                       id="banner_image"
                       name="banner_image"
                       accept="image/*"
                       onchange="previewBanner(event)">

                <small class="upload-hint">
                    Accepted formats: JPG, PNG. Max size: 5MB.
                    Recommended size: 1200x600px.
                </small>
            </div>

            <div id="banner-preview"
                 style="display: none;"
                 class="mb-3">

                <p class="current-image-label">
                    Banner Preview:
                </p>

                <img id="banner-preview-img"
                     src="#"
                     alt="Banner Preview"
                     class="preview-banner">
            </div>

            <button type="submit"
                    class="btn btn-primary-action">
                Save Partnership
            </button>

            <a href="{{ route('admin.partnerships.index') }}"
               class="btn btn-secondary">
                Cancel
            </a>

        </form>

    </div>
</div>

@endsection

@push('scripts')
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
@endpush