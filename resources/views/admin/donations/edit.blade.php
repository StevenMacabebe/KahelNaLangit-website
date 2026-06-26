@extends('admin.layouts.app')

@section('title')
    Donations
@endsection

@section('description')
    Edit donation details and tracking information.
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <p class="text-muted">
            Update GCash, BDO, Maya details, and donation guidelines.
        </p>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show">
                <strong>Error!</strong> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Please fix the following errors:</strong>
                <ul class="mb-0 mt-2">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST"
              action="{{ route('admin.donations.update') }}"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <!-- GCash -->
            <h4 class="mt-3 border-bottom pb-2">GCash</h4>
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

            <!-- GCash QR -->
            <h5>GCash QR Code</h5>
            <div class="mb-3">
                @if(isset($donation) && $donation->gcash_qr)
                    <div class="mb-2">
                        <p class="current-image-label">Current QR Code:</p>
                        <img src="{{ asset('public/images/uploads/donations/' . $donation->gcash_qr) }}" 
                                alt="GCash QR" 
                                class="preview-image">
                        <p class="upload-hint">Upload a new image to replace the current QR code.</p>
                    </div>
                @else
                    <p class="text-muted">No QR code uploaded yet.</p>
                @endif
                <input type="file" class="form-control" id="gcash_qr" name="gcash_qr" accept="image/*" onchange="previewImage(event)">
                <small class="upload-hint">Accepted formats: JPG, PNG, GIF, WebP. Max size: 2MB.</small>
            </div>

            <!-- BDO -->
            <h4 class="mt-3 border-bottom pb-2">BDO</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="bdo_bank_name" class="form-label">Bank Name</label>
                        <input type="text" class="form-control" id="bdo_bank_name" name="bdo_bank_name" value="{{ $donation->bdo_bank_name ?? '' }}" placeholder="BDO Unibank">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="bdo_account_name" class="form-label">Account Name</label>
                        <input type="text" class="form-control" id="bdo_account_name" name="bdo_account_name" value="{{ $donation->bdo_account_name ?? '' }}" placeholder="e.g., Kahel na Langit Foundation">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="bdo_account_number" class="form-label">Account Number</label>
                <input type="text" class="form-control" id="bdo_account_number" name="bdo_account_number" value="{{ $donation->bdo_account_number ?? '' }}" placeholder="e.g., 1234-5678-9012">
            </div>

            <!-- BDO QR -->
            <h5>BDO QR Code</h5>
            <div class="mb-3">
                @if(isset($donation) && $donation->bdo_qr)
                    <div class="mb-2">
                        <p class="current-image-label">Current QR Code:</p>
                        <img src="{{ asset('public/images/uploads/donations/' . $donation->bdo_qr) }}" 
                                alt="BDO QR" 
                                class="preview-image">
                        <p class="upload-hint">Upload a new image to replace the current QR code.</p>
                    </div>
                @else
                    <p class="text-muted">No QR code uploaded yet.</p>
                @endif
                <input type="file" class="form-control" id="bdo_qr" name="bdo_qr" accept="image/*" onchange="previewImage(event)">
                <small class="upload-hint">Accepted formats: JPG, PNG, GIF, WebP. Max size: 2MB.</small>
            </div>

            <!-- Maya -->
            <h4 class="mt-3 border-bottom pb-2">Maya</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="maya_bank_name" class="form-label">Bank Name</label>
                        <input type="text" class="form-control" id="maya_bank_name" name="maya_bank_name" value="{{ $donation->maya_bank_name ?? '' }}" placeholder="Maya Bank">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="maya_account_name" class="form-label">Account Name</label>
                        <input type="text" class="form-control" id="maya_account_name" name="maya_account_name" value="{{ $donation->maya_account_name ?? '' }}" placeholder="e.g., Kahel na Langit Foundation">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="maya_account_number" class="form-label">Account Number</label>
                <input type="text" class="form-control" id="maya_account_number" name="maya_account_number" value="{{ $donation->maya_account_number ?? '' }}" placeholder="e.g., 9876-5432-1098">
            </div>

            <!-- Maya QR -->
            <h5>Maya QR Code</h5>
            <div class="mb-3">
                @if(isset($donation) && $donation->maya_qr)
                    <div class="mb-2">
                        <p class="current-image-label">Current QR Code:</p>
                        <img src="{{ asset('public/images/uploads/donations/' . $donation->maya_qr) }}" 
                                alt="Maya QR" 
                                class="preview-image">
                        <p class="upload-hint">Upload a new image to replace the current QR code.</p>
                    </div>
                @else
                    <p class="text-muted">No QR code uploaded yet.</p>
                @endif
                <input type="file" class="form-control" id="maya_qr" name="maya_qr" accept="image/*" onchange="previewImage(event)">
                <small class="upload-hint">Accepted formats: JPG, PNG, GIF, WebP. Max size: 2MB.</small>
            </div>

            <!-- Image Preview (new upload) -->
            <div id="new-image-preview" style="display: none;" class="mt-2">
                <p class="current-image-label">New Image Preview:</p>
                <img id="new-image-preview-img" src="#" alt="Preview" class="preview-image">
                <p class="upload-hint">This is your new image. Click Save to confirm.</p>
            </div>

            <!-- Donation Guidelines -->
            <h4 class="mt-3 border-bottom pb-2">Donation Guidelines</h4>
            <div class="mb-3">
                <label for="guidelines" class="form-label">Guidelines for Donors</label>
                <textarea class="form-control" id="guidelines" name="guidelines" rows="4">{{ $donation->guidelines ?? 'Enter donation guidelines here...' }}</textarea>
                <small class="upload-hint">These guidelines will appear on the public donate page.</small>
            </div>

            <!-- Buttons -->
            <div class="btn-group-admin">
                <button type="submit" class="btn btn-primary btn-lg">
                    Save Donation Details
                </button>

                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary btn-lg">
                    Back to Dashboard
                </a>
            </div>
        </form>
    </div>
</div>

<div class="card mt-3">
    <div class="card-body">
        <h5>Quick Tips</h5>
        <ul class="mb-0">
            <li>QR codes should be square (e.g., 500x500 pixels)</li>
            <li>Max file size: 2MB</li>
            <li>Supported formats: JPG, PNG, GIF, WebP</li>
            <li>The QR code will appear on the <a href="/donate" target="_blank">public donate page</a></li>
        </ul>
    </div>
</div>

@endsection

@push('scripts')
<script>
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
@endpush