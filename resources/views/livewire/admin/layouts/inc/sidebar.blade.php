<div>
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title" key="t-menu">Menu</li>

                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="waves-effect {{ request()->is('admin/dashboard') ? 'active_menu' : '' }}">
                            <i class="bx bx-grid-alt"></i>
                            <span key="t-dashboard">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="waves-effect {{ request()->is('admin/dashboard') ? 'active_menu' : '' }}">
                            <i class="bx bxs-user-detail"></i>
                            <span key="t-dashboard">Client & Provider</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="waves-effect {{ request()->is('admin/dashboard') ? 'active_menu' : '' }}">
                            <i class="bx bx-mail-send"></i>
                            <span key="t-dashboard">Conversations</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="waves-effect {{ request()->is('admin/dashboard') ? 'active_menu' : '' }}">
                            <i class="bx bx-cube"></i>
                            <span key="t-dashboard">Order Management</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="waves-effect {{ request()->is('admin/dashboard') ? 'active_menu' : '' }}">
                            <i class="bx bx-grid-alt"></i>
                            <span key="t-dashboard">Billing & Payments</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="waves-effect {{ request()->is('admin/dashboard') ? 'active_menu' : '' }}">
                            <i class="bx bx-grid-alt"></i>
                            <span key="t-dashboard">Notification</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="waves-effect {{ request()->is('admin/dashboard') ? 'active_menu' : '' }}">
                            <i class="bx bx-grid-alt"></i>
                            <span key="t-dashboard">Roles</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="waves-effect {{ request()->is('admin/dashboard') ? 'active_menu' : '' }}">
                            <i class="bx bx-command"></i>
                            <span key="t-dashboard">Support Tickets</span>
                        </a>
                    </li>

                    @if (is_permitted('manage_admins'))
                        <li>
                            <a href="javascript: void(0);"
                                class="has-arrow waves-effect {{ request()->is('admin/all-admins') || request()->is('admin/all-admins/*') ? 'active_menu' : '' }}">
                                <i class="bx bx-group"></i>
                                <span key="t-multi-level">Admins</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                @if (is_permitted('manage_admins'))
                                    <li>
                                        <a href="{{ route('admin.allAdmins') }}" key="t-level-1-1"
                                            class="{{ request()->is('admin/all-admins') ? 'active_sub_menu' : '' }}">All
                                            Admins</a>
                                    </li>
                                @endif

                                @if (is_permitted('manage_roles_permissions'))
                                    <li>
                                        <a href="{{ route('admin.adminRolePermissions') }}" key="t-level-1-1"
                                            class="{{ request()->is('admin/all-admins/role-permissions') ? 'active_sub_menu' : '' }}">Roles
                                            & Permissions</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif

                    @if (is_permitted('manage_settings'))
                        <li>
                            <a href="javascript: void(0);"
                                class="has-arrow waves-effect {{ request()->is('admin/settings') || request()->is('admin/settings/*') ? 'active_menu' : '' }}">
                                <i class="bx bx-cog"></i>
                                <span key="t-multi-level">Settings</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                @if (is_permitted('manage_console'))
                                    <li>
                                        <a href="{{ route('admin.console') }}" key="t-level-1-1"
                                            class="{{ request()->is('admin/settings/console') ? 'active_sub_menu' : '' }}">Console</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif

                    {{-- <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active_menu' : '' }}">
                            <i class="bx bx-box"></i>
                            <span key="t-multi-level">Products</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="{{ route('admin.allProducts') }}" key="t-level-1-1" class="{{ request()->is('admin/products/all') ? 'active_sub_menu' : '' }}">All Products</a></li>
                            <li><a href="{{ route('admin.categories') }}" key="t-level-1-1" class="{{ request()->is('admin/products/categories') ? 'active_sub_menu' : '' }}">Categories</a></li>
                        </ul>
                    </li> --}}


                    {{-- <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-share-alt"></i>
                            <span key="t-multi-level">Multi Level</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="javascript: void(0);" key="t-level-1-1">Level 1.1</a></li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Level 1.2</a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);" key="t-level-2-1">Level 2.1</a></li>
                                    <li><a href="javascript: void(0);" key="t-level-2-2">Level 2.2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}

                </ul>
            </div>

        </div>
    </div>
</div>
