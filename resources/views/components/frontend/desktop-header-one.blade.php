<div>
    <header class="header-area d-none d-lg-block">
    
        <div class="header-middle">
            <div class="container">
                <div class="header-middle-wrap">
                    <div class="brand-area">
                        <a class="brand-logo" href="{{ route('front') }}"><img class="brand-image"
                                src="{{ asset(IMG_LOGO_PATH . $allsettings['main_logo']) }}"
                                alt="{{ $allsettings['app_title'] }}" /></a>
                    </div>
                    <div class="search-area">
                        <form action="{{ route('category.search') }}" method="get">
                            <div class="search-wrap">
                                <select class="form-select" name="category">
                                    <option value="" selected>--{{ __('Danh mục sản phẩm') }}--</option>
                                    @foreach (Category() as $item)
                                        <option value="{{ $item->id }}">
                                            {{ langConverter($item->en_Category_Name, $item->fr_Category_Name) }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="search" name="search"
                                        placeholder="{{ __('Tìm kiếm') }}" />
                                    <button type="submit" class="search-btn"><i
                                            class="flaticon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="header-right">

                        <!-- <div class="wishlist single-btn">
                            <a href="{{ route('wishlist') }}" class="wishlist-btn header-btn">
                                <div class="btn-left">
                                    <i class="btn-icon flaticon-like"></i>
                                    <span
                                        class="count wishListCuntFromController">{{ auth()->check() ? wishlistCount() : '0' }}</span>
                                </div>
                                <div class="btn-right">
                                    <span class="btn-text">{{ __('Wishlist') }}</span>
                                    <span
                                        class="item-count wishListCuntFromController">{{ auth()->check() ? wishlistCount() : '0' }}
                                        {{ __('items') }}</span>
                                </div>
                            </a>
                        </div> -->
                        <!-- <div class="compare single-btn">
                            <a href="{{ route('compare') }}" class="compare-btn header-btn">
                                <div class="btn-left">
                                    <i class="btn-icon flaticon-bar-chart"></i>
                                    <span
                                        class="count CompareCuntFromController">{{ auth()->check() ? compareListCount() : '0' }}</span>
                                </div>
                                <div class="btn-right">
                                    <span class="btn-text">{{ __('Compare') }}</span>
                                    <span
                                        class="item-count CompareCuntFromController">{{ auth()->check() ? compareListCount() : '0' }}
                                        {{ __('items') }}</span>
                                </div>
                            </a>
                        </div> -->


                        <div class="cart single-btn">
                            <a data-bs-toggle="offcanvas" href="#cartOffcanvasSidebar" role="button"
                                aria-controls="cartOffcanvasSidebar" class="cart-btn header-btn">
                                <div class="btn-left">
                                    <i class="btn-icon flaticon-shopping-bag"></i>
                                    <span class="count totalCountItem">{{ cartCountItem() }}</span>
                                </div>
                                <div class="btn-right">
                                    <span class="btn-text">{{ __('Giỏ hàng') }}</span>
                                    @php
                                        $content = Cart::content();
                                        $total = 0;
                                    @endphp
                                    @foreach ($content as $item)
                                        @php
                                            $total += $item->subtotal;
                                        @endphp
                                    @endforeach
                                    <span class="price totalAmount">
                                        {{ currencyConverter($total) }}</span>
                                </div>
                            </a>
                        </div>

                        @if (Auth::user())
                                <div class="account-switcher">
                                    <span class="flag">
                                        <img src="{{ file_exists(AdminProfilePicture() . Auth::user()->image) ? (isset(Auth::user()->image) ? asset(AdminProfilePicture() . Auth::user()->image) : Avatar::create(Auth::user()->name)->toBase64()) : Auth::user()->image }}"
                                            alt="{{ $allsettings['app_title'] }}">
                                    </span>

                                    <a href="javascript:void(0)" class="lang">{{ Auth::user()->name }} <i
                                            class="fas fa-angle-down"></i></a>
                                    <ul class="account-list">
                                        @if (Auth::user()->is_admin == ACTIVE)
                                            <li class="single-lang"><a class="lang-text"
                                                    href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                                            </li>
                                        @else
                                            <li class="single-lang"><a class="lang-text"
                                                    href="{{ route('user.profile') }}">{{ __('Profile') }}</a>
                                            </li>
                                        @endif
                                        <li class="single-lang"><a class="lang-text"
                                                href="{{ route('user.logout') }}">{{ __('Logout') }}</a></li>
                                    </ul>
                                </div>
                            @else
                                <div class="account-switcher">
                                    <span class="flag"><img
                                            src="{{ asset('frontend/assets/images/user-avatar.png') }}"
                                            alt="{{ $allsettings['app_title'] }}"></span>
                                    <a href="{{ route('login') }}" class="lang">{{ __('My Account') }}</a>
                                </div>
                            @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <nav class="menu-area">
                <ul class="main-menu">
                    <li
                        class="menu-item menu-item-has-children {{ Route::is('front') || Route::is('front*') ? 'active' : '' }}">
                        <a class="menu-link" href="{{ route('front') }}">Trang chủ</a>
                    </li>
                    <li
                        class="menu-item menu-item-has-children {{ Route::is('front') || Route::is('front*') ? 'active' : '' }}">
                        <a class="menu-link" href="{{ route('front') }}">Sản phẩm</a>
                    </li>
        

                    <!-- <li class="menu-item mega-menu-parent">
                        <a class="menu-link" href="#">{{ staticMenuName('shop') }} <i
                                class="arrow-icon fas fa-angle-down"></i></a>
                        <div class="mega-menu-area">
                            <div class="container">
                                <ul class="mega-menu">
                                    <li class="mega-menu-item">
                                        <a class="mega-menu-title" href="#">{{ __('Category') }}</a>
                                        <ul class="menu-items">
                                            @foreach (Category() as $item)
                                                <li class="mega-menu-items"><a class="mega-menu-link"
                                                        href="{{ route('category.product', $item->id) }}">{{ langConverter($item->en_Category_Name, $item->fr_Category_Name) }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a class="mega-menu-title" href="#">{{ __('Brand') }}</a>
                                        <ul class="menu-items">
                                            @foreach (Brnad() as $item)
                                                <li class="mega-menu-items"><a class="mega-menu-link"
                                                        href="{{ route('brand.product', $item->id) }}">{{ langConverter($item->en_BrandName, $item->fr_BrandName) }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a class="mega-menu-banner" href="{{ $allsettings['menu_link'] }}">
                                            <img class="menu-banner-image"
                                                src="{{ asset(IMG_ADVERTISE_PATH . $allsettings['menu_thumb']) }}"
                                                alt="mega-menu-banner" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li> -->

                 
                    <li class="menu-item {{ Route::is('about.us') || Route::is('about.us*') ? 'active' : '' }}"><a
                            class="menu-link" href="{{ route('about.us') }}">Giới thiệu</a>
                    </li>
                   
                    

                </ul>
            </nav>
        </div>
    </header>
</div>
