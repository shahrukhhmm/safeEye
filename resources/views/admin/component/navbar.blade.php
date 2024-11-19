@php
    $roleId = Auth::user()->role_id;
@endphp

<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            @if ($roleId == 1)
                <li>
                    <a href="{{ url('/dashboard') }}" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i>
                        <span class="nav-text">{{ __('SE.dashboard') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/user') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i>
                        <span class="nav-text">{{ __('SE.user_management') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/branch') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i>
                        <span class="nav-text">{{ __('SE.branches') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/inventory') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i>
                        <span class="nav-text">{{ __('SE.inventories') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/inventoryCategory') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i>
                        <span class="nav-text">{{ __('SE.inventory_category') }}</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/user-attendance') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i>
                        <span class="nav-text">{{ __('SE.user_attendance') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/zakat') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i>
                        <span class="nav-text">{{ __('SE.zakat') }}</span>
                    </a>
                </li>
            @elseif ($roleId == 2)

                <li>
                    <a href="{{ url('/user-attendance') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i>
                        <span class="nav-text">{{ __('SE.user_attendance') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/sales') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i>
                        <span class="nav-text">{{ __('SE.sales') }}</span>
                    </a>
                </li>

            @endif
        </ul>
    </div>
</div>
