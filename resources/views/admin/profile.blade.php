@extends('admin.layouts.app')

@section('title', 'My Profile')

@section('content')

<div class="card">
    <div class="card-body">

        <h2 class="dashboard-title">
            My Profile
        </h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.profile.update') }}">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="full_name" class="form-label">
                    Full Name
                </label>

                <input type="text"
                       class="form-control"
                       id="full_name"
                       name="full_name"
                       value="{{ $admin->full_name }}"
                       required>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">
                    Username
                </label>

                <input type="text"
                       class="form-control"
                       id="username"
                       name="username"
                       value="{{ $admin->username }}"
                       required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">
                    Email
                </label>

                <input type="email"
                       class="form-control"
                       id="email"
                       name="email"
                       value="{{ $admin->email }}"
                       required>
            </div>

            <hr>

            <h5>Change Password (Optional)</h5>

            <div class="mb-3">
                <label for="password" class="form-label">
                    New Password
                </label>

                <input type="password"
                       class="form-control"
                       id="password"
                       name="password"
                       placeholder="Leave blank to keep current password">
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">
                    Confirm New Password
                </label>

                <input type="password"
                       class="form-control"
                       id="password_confirmation"
                       name="password_confirmation"
                       placeholder="Confirm new password">
            </div>

            <button type="submit"
                    class="btn btn-primary-action">
                Update Profile
            </button>

            <a href="{{ route('admin.dashboard') }}"
               class="btn btn-secondary">
                ← Back to Dashboard
            </a>

        </form>

    </div>
</div>

@endsection