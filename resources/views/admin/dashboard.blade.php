@extends('admin.layouts.app')

@section('title')
    Dashboard
@endsection

@section('description')
    Overview of donations, inquiries, partnerships, updates, and wishlist items.
@endsection

@push('styles')
<style>

    /* =========================
    DASHBOARD GRID
    ========================= */

    .dashboard-grid {
        margin-bottom: 2rem;
    }

    /* =========================
    STAT CARDS
    ========================= */

    .stat-card {
        position: relative;
        overflow: hidden;

        padding: 1.5rem;
        border-radius: 1.25rem;

        min-height: 8.75rem;

        color: white;

        display: flex;
        flex-direction: column;
        justify-content: center;

        box-shadow: 0 0.625rem 1.5625rem rgba(0,0,0,.08);
        transition: all .25s ease;
    }

    .stat-card:hover {
        transform: translateY(-0.3125rem);
        box-shadow: 0 1rem 2.1875rem rgba(0,0,0,.12);
    }

    .stat-card h5 {
        margin-bottom: 0.5rem;

        font-size: 0.95rem;
        font-weight: 600;

        opacity: .95;
    }

    .stat-card h3 {
        margin: 0;

        font-size: 2.5rem;
        font-weight: 700;
    }

    /* =========================
    CARDS
    ========================= */

    .updates-card {
        background: linear-gradient(
            135deg,
            #930000 0%,
            #a61a1a 45%,
            #bb2323 100%
        );
    }

    .partnership-card {
        background: linear-gradient(
            135deg,
            #658107 0%,
            #7a9910 45%,
            #87ab12 100%
        );
    }

    .wishlist-card {
        background: linear-gradient(
            135deg,
            #eab000 0%,
            #f2bf1a 45%,
            #ffc928 100%
        );
    }

    .wishlist-card h5,
    .wishlist-card h3 {
        color: inherit;
    }

    .inquiries-card {
        background: linear-gradient(
            135deg,
            #89479a 0%,
            #9754a8 45%,
            #a55cbc 100%
        );
    }

    /* =========================
    CONTENT CARDS
    ========================= */

    .dashboard-card {
        border: none;
        border-radius: 1.25rem;

        background: #fff;

        box-shadow: 0 0.5rem 1.5rem rgba(0,0,0,.06);
    }

    .dashboard-card .card-body {
        padding: 1.75rem;
    }

    .section-title {
        font-size: 1.1rem;
        font-weight: 700;

        color: var(--orange-dark);

        margin-bottom: 1.25rem;
    }

    /* =========================
    QUICK ACTIONS
    ========================= */

    .quick-action-btn {
        padding: 0.9rem 1rem;
        border-radius: 0.875rem;
        font-weight: 600;
    }

    /* =========================
    RECENT UPDATES
    ========================= */

    .list-group {
        border-radius: 0.875rem;
        overflow: hidden;
    }

    .list-group-item {
        border: none;
        border-bottom: 0.0625rem solid #f0f0f0;

        padding: 1rem 1.25rem;

        background: transparent;
    }

    .list-group-item:last-child {
        border-bottom: none;
    }

    .category-badge {
        background: rgba(255,108,39,.12);
        color: var(--orange-dark);

        padding: 0.45rem 0.85rem;

        border-radius: 62.4375rem;

        font-size: 0.8rem;
        font-weight: 600;
    }

    .empty-state {
        margin: 0;
        color: #8d8d8d;
    }

    /* =========================
    MOBILE
    ========================= */

    @media (max-width: 48rem) {

        .stat-card {
            min-height: 7.5rem;
        }

        .stat-card h3 {
            font-size: 2rem;
        }
    }

</style>
@endpush

@section('content')

<div class="row dashboard-grid g-4">

    <div class="col-lg-3 col-md-6">
        <div class="stat-card updates-card">
            <h5>Updates</h5>
            <h3>{{ $updatesCount ?? 0 }}</h3>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="stat-card partnership-card">
            <h5>Partnerships</h5>
            <h3>{{ $partnershipsCount ?? 0 }}</h3>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="stat-card wishlist-card">
            <h5>Wishlist</h5>
            <h3>{{ $wishlistCount ?? 0 }}</h3>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="stat-card inquiries-card">
            <h5>Pending Inquiries</h5>
            <h3>{{ $inquiriesCount ?? 0 }}</h3>
        </div>
    </div>

</div>

<div class="card dashboard-card">

    <div class="card-body">

        <h5 class="section-title">
            Quick Actions
        </h5>

        <div class="row g-3">

            <div class="col-lg-3 col-md-6">
                <a href="{{ route('admin.updates.create') }}"
                   class="btn btn-primary-action quick-action-btn w-100">
                    New Update
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="{{ route('admin.partnerships.create') }}"
                   class="btn btn-primary-action quick-action-btn w-100">
                    New Partnership
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="{{ route('admin.wishlist.create') }}"
                   class="btn btn-primary-action quick-action-btn w-100">
                    New Wishlist
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="{{ route('admin.inquiries.index') }}"
                   class="btn btn-primary-action quick-action-btn w-100">
                    View Inquiries
                </a>
            </div>

        </div>

    </div>

</div>

<div class="card dashboard-card mt-4">

    <div class="card-body">

        <h5 class="section-title">
            Recent Updates
        </h5>

        @if(isset($recentUpdates) && $recentUpdates->count())

            <ul class="list-group">

                @foreach($recentUpdates as $update)

                    <li class="list-group-item d-flex justify-content-between align-items-center">

                        <span>
                            {{ $update->title }}
                        </span>

                        <span class="category-badge">
                            {{ ucfirst(str_replace('_', ' ', $update->category)) }}
                        </span>

                    </li>

                @endforeach

            </ul>

        @else

            <p class="empty-state">
                No recent updates available.
            </p>

        @endif

    </div>

</div>

@endsection