<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
        <img src="/backend/dist/img/AdminLTELogo.png"  class="brand-image img-circle elevation-3" style="opacity: .8; width: 33px; height: 33px">
        <span class="brand-text font-weight-light">BSD CỦ CHI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
            </ul>
        </nav>
        @endrole
    </div>
</aside>
