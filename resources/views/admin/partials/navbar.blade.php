<nav class="navbar navbar-expand-lg">

    <div class="container-fluid">

        <div class="d-flex align-items-center">

            <button id="navbarToggleBtn"
                    class="menu-btn d-none"
                    onclick="toggleSidebar()">
                ☰
            </button>

            <div>
                <div class="navbar-brand mb-0">
                    Kahel Na Langit
                </div>
            </div>

        </div>

        <div class="d-flex align-items-center gap-3">
            <span class="admin-user">
                Welcome!
                <strong>
                    {{ Auth::guard('admin')->user()->full_name }}
                </strong>
            </span>

            <a href="{{ route('admin.profile') }}"
            class="btn-profile">
                My Profile
            </a>
            <form method="POST"
                action="{{ route('admin.logout') }}">
                @csrf

                <button type="submit"
                        class="btn-logout border-0">
                    Logout
                </button>
            </form>

        </div>

    </div>

</nav>