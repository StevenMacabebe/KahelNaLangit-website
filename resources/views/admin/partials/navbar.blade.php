<nav class="navbar navbar-expand-lg">

    <div class="container-fluid navbar-grid">

        <!-- LEFT -->
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

        <!-- MIDDLE -->
        <div class="navbar-middle">

            <span class="admin-user">
                Welcome!
                <strong>
                    {{ Auth::guard('admin')->user()->full_name }}
                </strong>
            </span>

        </div>

        <!-- RIGHT -->
        <div class="navbar-right">

            <a href="{{ route('admin.profile') }}"
               class="btn-profile">
                My Profile
            </a>

            <form method="POST"
                  action="{{ route('admin.logout') }}">
                @csrf

                <button type="submit"
                        class="btn-logout">
                    Logout
                </button>

            </form>

        </div>

    </div>

</nav>