<div class="sidebar">
    <div class="app-title">Template Web</div>

    <div class="sidebar-header">
        <img src="{{ asset('images/profile-img.png') }}" alt="">
        <div class="name-tag">
            <div class="name">Danang</div>
            <div class="status">Admin</div>
        </div>
    </div>

    <div class="sidebar-menu-tag">Menu</div>
    <div class="sidebar-content">
        <ul class="sidebar-menu">
            <li>
                <a href="#" class="sidebar-menu-item">
                    <i class="fas fa-desktop sidebar-icon-img"></i>
                    <div class="sidebar-text-item">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.artist') }}" class="sidebar-menu-item">
                    <i class="fas fa-user-friends sidebar-icon-img"></i>
                    <div class="sidebar-text-item">Artist</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.album') }}" class="sidebar-menu-item">
                    <i class="fas fa-compact-disc sidebar-icon-img"></i>
                    <div class="sidebar-text-item">Album</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.track') }}" class="sidebar-menu-item">
                    <i class="fas fa-bell sidebar-icon-img"></i>
                    <div class="sidebar-text-item">Track</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.played') }}" class="sidebar-menu-item">
                    <i class="fas fa-shopping-cart sidebar-icon-img"></i>
                    <div class="sidebar-text-item">Played</div>
                </a>
            </li>
        </ul>
    </div>
</div>