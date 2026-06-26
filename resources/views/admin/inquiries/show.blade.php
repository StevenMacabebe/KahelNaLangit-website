@extends('admin.layouts.app')

@section('title')
    Inquiries
@endsection

@section('description')
    Full inquiry information and response management.
@endsection

@section('content')

<div class="card">
    <div class="card-body">

        <p>
            <strong>From:</strong>
            {{ $inquiry->full_name }}
        </p>

        <p>
            <strong>Email:</strong>
            {{ $inquiry->user->email ?? 'N/A' }}
        </p>

        <p>
            <strong>Contact:</strong>
            {{ $inquiry->contact_number ?? 'N/A' }}
        </p>

        <p>
            <strong>Subject:</strong>
            {{ $inquiry->subject }}
        </p>

        <p>
            <strong>Status:</strong>

            <span class="badge bg-{{ $inquiry->status === 'pending'
                ? 'warning'
                : ($inquiry->status === 'resolved'
                    ? 'success'
                    : 'secondary') }}">
                {{ ucfirst($inquiry->status) }}
            </span>
        </p>

        <p>
            <strong>Date:</strong>
            {{ $inquiry->created_at->format('F d, Y h:i A') }}
        </p>

        <hr>

        <h6 class="fw-bold mb-3">
            Message
        </h6>

        <p class="mb-0">
            {{ $inquiry->message }}
        </p>

        <hr>

        <div class="form-actions">

            <form method="POST"
                  action="{{ route('admin.inquiries.update', $inquiry->id) }}">

                @csrf
                @method('PUT')

                <select name="status"
                        class="form-select d-inline w-auto">

                    <option value="pending"
                        {{ $inquiry->status === 'pending' ? 'selected' : '' }}>
                        Pending
                    </option>

                    <option value="resolved"
                        {{ $inquiry->status === 'resolved' ? 'selected' : '' }}>
                        Resolved
                    </option>

                    <option value="archived"
                        {{ $inquiry->status === 'archived' ? 'selected' : '' }}>
                        Archived
                    </option>

                </select>

                <button type="submit"
                        class="btn btn-primary-action">
                    Update Status
                </button>

            </form>

            <a href="{{ route('admin.inquiries.index') }}"
               class="btn btn-secondary">
                Back
            </a>

        </div>

    </div>
</div>

@endsection