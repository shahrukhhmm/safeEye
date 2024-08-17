@php
    $roleId = Auth::user()->role_id;
@endphp

<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            @if ($roleId == 1)
                <li>
                    <a href="{{ url('/dashboard') }}" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/user') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">User Management</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/branch') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Branches</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/inventory') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Inventories</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/inventoryCategory') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Inventory Category </span>
                    </a>
                </li>
            @elseif ($roleId == 2)
                <li>
                    <a href="{{ url('/dashboard') }}" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ url('/dashboard') }}" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Home</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>
