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

<li class="nav-item {{ Request::is('admin.actualites*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.actualites.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Actualites</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin.peyements*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.peyements.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Peyements</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin.formateurs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.formateurs.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Formateurs</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin.condidats*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.condidats.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Condidats</span>
    </a>
</li>
