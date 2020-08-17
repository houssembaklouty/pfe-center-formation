<li class="nav-item {{ Request::is('admin.categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.categories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Categories</span>
    </a>
</li>

<li class="nav-item {{ Request::is('admin.formations*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.formations.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Formations</span>
    </a>
</li>
