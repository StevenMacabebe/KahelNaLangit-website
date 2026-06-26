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