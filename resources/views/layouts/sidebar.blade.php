<div class="sidebar">
    <nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item {{ Request::path() == 'blogs/create' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('blogs.create') }}">
            <i class="nav-icon icon-speedometer"></i> Menu1</a>
        </li>
        <li class="nav-item {{ Request::is('blogs*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('blogs.create') }}">
            <i class="nav-icon icon-drop"></i> Menu2</a>
        </li>
    </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
