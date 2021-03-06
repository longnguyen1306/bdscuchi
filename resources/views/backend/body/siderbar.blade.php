<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
        <img src="{{ asset('images/default/logo.jpg') }}"  class="brand-image img-circle elevation-3" style="opacity: .8; width: 33px; height: 33px">
        <span class="brand-text font-weight-light">BSD CỦ CHI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(auth()->user()->avatar)
                <img src="{{ asset(auth()->user()->avatar) }}" class="img-circle elevation-2">
                @else
                <img src="{{ asset('images/default/default-user.jpg') }}" class="img-circle elevation-2">
                @endif
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>
        @role('admin')
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <!--menus-->
                <li class="nav-item {{ Request::is('admin/menus*') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/menus*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            Menus
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('admin/menus*') ? 'menu-is-opening menu-open' : '' }}">
                            <a href="{{ route('admin.top_menu.index') }}" class="nav-link {{ Request::is('admin/menus/top-menu*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top menus</p>
                            </a>

                        </li>
                    </ul>
                </li>

                <!--Danh mục-->
                <li class="nav-item {{ Request::is('admin/danh-muc*') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/danh-muc*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-align-justify"></i>
                        <p>
                            Danh mục
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('admin/danh-muc*') ? 'menu-is-opening menu-open' : '' }}">
                            <!--danh-muc-nha-dat-->
                            <a href="{{ route('admin.danh_muc_nha_dat.index') }}" class="nav-link {{ Request::is('admin/danh-muc/danh-muc-nha-dat*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh mục nhà đất</p>
                            </a>
                            <!--quận huyện-->
                            <a href="{{ route('admin.quan_huyen.index') }}" class="nav-link {{ Request::is('admin/danh-muc/quan-huyen*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quận Huyện</p>
                            </a>
                            <!--phường xã-->
                            <a href="{{ route('admin.phuong_xa.index') }}" class="nav-link {{ Request::is('admin/danh-muc/phuong-xa*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Phường xã</p>
                            </a>

                        </li>
                    </ul>
                </li>

                <!--users-->
                <li class="nav-item {{ Request::is('admin/nguoi-dung-va-quyen*') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/nguoi-dung-va-quyen*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Người dùng và quyền
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('admin/nguoi-dung-va-quyen*') ? 'menu-is-opening menu-open' : '' }}">
                            <a href="{{ route('admin.nguoi_dung.index') }}" class="nav-link {{ Request::is('admin/nguoi-dung-va-quyen/danh-sach-nguoi-dung*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách người dùng</p>
                            </a>
                            <a href="{{ route('admin.quyen.index') }}" class="nav-link {{ Request::is('admin/nguoi-dung-va-quyen/quyen*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quyền</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--settings-->
                <li class="nav-item {{ Request::is('admin/settings*') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/settings*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('admin/nguoi-dung-va-quyen*') ? 'menu-is-opening menu-open' : '' }}">
                            <a href="{{ route('admin.top_search.config') }}" class="nav-link {{ Request::is('admin/settings/top-search*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top search</p>
                            </a>

                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        @endrole
    </div>
</aside>
