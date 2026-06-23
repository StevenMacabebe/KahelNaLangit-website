@extends('admin.layouts.app')

@section('title', 'Dashboard')

@push('styles')
<style>
    .stat-card {
        padding: 24px;
        border-radius: 16px;
        color: white;
        transition: .3s ease;
        box-shadow: 0 4px 12px rgba(0,0,0,.12);
    }

    .stat-card:hover {
        transform: translateY(-4px);
    }

    .stat-card h5 {
        color: white;
        margin-bottom: 8px;
        font-size: 15px;
    }

    .stat-card h3 {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 0;
    }

    .updates-card {
        background: #930000;
    }

    .partnership-card {
        background: #658107;
    }

    .wishlist-card {
        background: #eab000;
    }

    .inquiries-card {
        background: #89479a;
    }

    .list-group-item {
        border: none;
        border-bottom: 1px solid #ececec;
        background: transparent;
    }

    .list-group-item:last-child {
        border-bottom: none;
    }

    .category-badge {
        background: #dce8fc;
        color: #365fa9;
        font-weight: 600;
        padding: 6px 10px;
        border-radius: 20px;
    }
</style>
@endpush

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="dashboard-title">
        Dashboard
    </h2>

    <span class="welcome-badge">
        Welcome, {{ Auth::guard('admin')->user()->full_name }}
    </span>

</div>

<div class="row">

    <div class="col-md-3 mb-3">
        <div class="stat-card updates-card">
            <h5>Updates</h5>
            <h3>{{ $updatesCount ?? 0 }}</h3>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="stat-card partnership-card">
            <h5>Partnerships</h5>
            <h3>{{ $partnershipsCount ?? 0 }}</h3>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="stat-card wishlist-card">
            <h5>Wishlist</h5>
            <h3>{{ $wishlistCount ?? 0 }}</h3>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="stat-card inquiries-card">
            <h5>Pending Inquiries</h5>
            <h3>{{ $inquiriesCount ?? 0 }}</h3>
        </div>
    </div>

</div>

<div class="card mt-4">
    <div class="card-body">

        <h5>Quick Actions</h5>

        <div class="row">

            <div class="col-md-3 mb-2">
                <a href="{{ route('admin.updates.create') }}"
                   class="btn btn-primary-action w-100">
                    New Update
                </a>
            </div>

            <div class="col-md-3 mb-2">
                <a href="{{ route('admin.partnerships.create') }}"
                   class="btn btn-primary-action w-100">
                    New Partnership
                </a>
            </div>

            <div class="col-md-3 mb-2">
                <a href="{{ route('admin.wishlist.create') }}"
                   class="btn btn-primary-action w-100">
                    New Wishlist
                </a>
            </div>

            <div class="col-md-3 mb-2">
                <a href="{{ route('admin.inquiries.index') }}"
                   class="btn btn-primary-action w-100">
                    View Inquiries
                </a>
            </div>

        </div>

    </div>
</div>

<div class="card mt-4">
    <div class="card-body">

        <h5>Recent Updates</h5>

        @if(isset($recentUpdates) && $recentUpdates->count())

            <ul class="list-group">

                @foreach($recentUpdates as $update)

                    <li class="list-group-item d-flex justify-content-between align-items-center">

                        {{ $update->title }}

                        <span class="category-badge">
                            {{ ucfirst(str_replace('_', ' ', $update->category)) }}
                        </span>

                    </li>

                @endforeach

            </ul>

        @else

            <p class="text-muted">
                No recent updates.
            </p>

        @endif

    </div>
</div>

@endsection