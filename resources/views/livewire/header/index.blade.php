<header id="header-container" class="header head-tr">
    <div id="header" class="head-tr bottom">
        <div class="container container-header">
            <div class="left-side">
                <livewire:header.logo.index />
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1 head-tr">
                    <ul id="responsive">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Danh mục</a>
                            <ul>
                                @foreach($danhMucs as $danhMuc)
                                <li><a href="{{ route('get_nha_dat_by_danh_muc_slug', $danhMuc->slug) }}">{{ $danhMuc->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menus as $menu)
                        <li><a href="{{ $menu->link }}" target="_blank">{{ $menu->name }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>

            @if(auth()->check())
            <div class="header-user-menu user-menu add">
                <div class="header-user-name">
                    @if(auth()->user()->avatar)
                    <span><img src="{{ asset(auth()->user()->avatar) }}" alt="Nhà đất củ chi"></span>
                    @else
                    <span><img src="{{ asset('images/default/default-user.jpg') }}" alt="Nhà đất củ chi"></span>
                    @endif
                    {{ auth()->user()->name }}
                </div>
                <ul>
                    <li><a href=""> Tài khoản</a></li>
                    <li><a href=""> Đỏi mật khẩu</a></li>
                    <li><a href="#">Đăng xuất</a></li>
                </ul>
            </div>
            @else
            <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                <!-- Header Widget -->
                <div class="header-widget sign-in">
                    <div class="show-reg-form modal-open"><a href="#">Đăng Nhập / Đăng ký</a></div>
                </div>
                <!-- Header Widget / End -->
            </div>
            @endif
        </div>
    </div>
</header>
