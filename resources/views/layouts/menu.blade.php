<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('rols.index') }}" class="nav-link {{ Request::is('rols*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Rols</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Roles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('qrcodes.index') }}" class="nav-link {{ Request::is('qrcodes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Qrcodes</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('transations.index') }}" class="nav-link {{ Request::is('transations*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Transations</p>
    </a>
</li>
