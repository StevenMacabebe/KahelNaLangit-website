<nav class="navbar navbar-expand-lg">

    <div class="container-fluid">

        <div class="navbar-left">

            <button id="navbarToggleBtn"
                    class="menu-btn d-none"
                    onclick="toggleSidebar()">
                ☰
            </button>

            <div class="navbar-brand mb-0">
                Kahel Na Langit
            </div>

        </div>

            <div class="navbar-right">

                <span class="admin-user">
                    Welcome!
                    <strong>
                        {{ Auth::guard('admin')->user()->full_name }}
                    </strong>
                </span>

                <a href="{{ route('admin.profile') }}"
                class="btn-icon btn-profile-icon"
                title="My Profile"
                aria-label="My Profile">
                    👤
                </a>

                <form method="POST"
                    action="{{ route('admin.logout') }}">
                    @csrf

                    <button type="submit"
                            class="btn-icon btn-logout-icon"
                            title="Logout"
                            aria-label="Logout">
                        ⎋
                    </button>
                </form>

            </div>

    </div>

</nav>