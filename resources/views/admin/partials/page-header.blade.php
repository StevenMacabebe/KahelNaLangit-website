@php
    $pageTitle = trim($__env->yieldContent('title'));
    $pageDescription = trim($__env->yieldContent('description'));

    $headerClass = match($pageTitle) {
        'Partnerships' => 'header-partnerships',
        'Updates' => 'header-updates',
        'Wishlist' => 'header-wishlist',
        'Pending Inquiries' => 'header-pending-inquiries',
        'Inquiries' => 'header-inquiries',
        'Dashboard' => 'header-dashboard',
        'Donations' => 'header-donations',
        'My Profile' => 'header-my-profile',
        default => 'header-dashboard'
    };
@endphp

<div class="page-header {{ $headerClass }}">
    <div class="page-header-content">

        <div class="d-flex justify-content-between align-items-center">

            {{-- LEFT SIDE --}}
            <div>
                <h1 class="mb-1">
                    {{ $pageTitle }}
                </h1>

                <div class="lead">
                    {{ $pageDescription }}
                </div>
            </div>

            {{-- RIGHT SIDE --}}
            <div class="text-end">
                <span class="admin-user">
                    Welcome!
                    <strong>
                        {{ Auth::guard('admin')->user()->full_name }}
                    </strong>
                </span>
            </div>

        </div>

    </div>
</div>