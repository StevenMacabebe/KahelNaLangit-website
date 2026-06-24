<div class="sidebar"
     id="sidebar">

    <div class="sidebar-header">
        <div class="d-flex justify-content-end">
            <button class="sidebar-close-btn"
                    onclick="toggleSidebar()">
                ✕
            </button>
        </div>
    </div>

    <div class="sidebar-nav">
        <a href="{{ route('admin.dashboard') }}"
        class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            Dashboard
        </a>

        <a href="{{ route('admin.updates.index') }}"
        class="{{ request()->routeIs('admin.updates.*') ? 'active' : '' }}">
            Updates
        </a>

        <a href="{{ route('admin.partnerships.index') }}"
        class="{{ request()->routeIs('admin.partnerships.*') ? 'active' : '' }}">
            Partnerships
        </a>

        <a href="{{ route('admin.wishlist.index') }}"
        class="{{ request()->routeIs('admin.wishlist.*') ? 'active' : '' }}">
            Wishlist
        </a>

        <a href="{{ route('admin.inquiries.index') }}"
        class="{{ request()->routeIs('admin.inquiries.*') ? 'active' : '' }}">
            Inquiries
        </a>

        <a href="{{ route('admin.donations.edit') }}"
        class="{{ request()->routeIs('admin.donations.*') ? 'active' : '' }}">
            Donations
        </a>

        <a href="{{ route('admin.profile') }}"
        class="{{ request()->routeIs('admin.profile') ? 'active' : '' }}">
            My Profile
        </a>

        <form method="POST"
            action="{{ route('admin.logout') }}"
            style="display:inline;">
            @csrf

            <a href="#"
            onclick="event.preventDefault(); this.closest('form').submit();">
                Logout
            </a>
        </form>

    </div>

</div>