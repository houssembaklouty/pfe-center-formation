<li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.categories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Categories</span>
    </a>
</li>
<li class="nav-item {{ Request::is('formations*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.formations.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Formations</span>
    </a>
</li>
<li class="nav-item {{ Request::is('actualites*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('actualites.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Actualites</span>
    </a>
</li>
<li class="nav-item {{ Request::is('peyements*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('peyements.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Peyements</span>
    </a>
</li>
