<div>
    <header class="header-area d-none d-lg-block">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-lg-12">
                        <div class="header-top-right">
                      
                            <div class="switcher-lang-currency">
                                
                                <div class="lang-switcher " style="margin-right: 15px;" >
                                        <a href="{{ route('locale.switch', 'en') }}" class="lang">
                                            {{ getLanguage('en')->name }}
                                        </a>
                                </div>
                                
                                <div class="lang-switcher">
                                        <a href="{{ route('locale.switch', 'fr') }}" class="lang">
                                            {{ getLanguage('fr')->name }}
                                        </a>
                                </div>
                                

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
        </div>
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
                                    <option value="" selected>--{{ __('Category') }}--</option>
                                    @foreach (Category() as $item)
                                        <option value="{{ $item->id }}">
                                            {{ langConverter($item->en_Category_Name, $item->fr_Category_Name) }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="search" name="search"
                                        placeholder="{{ __('Search Here') }}" />
                                    <button type="submit" class="search-btn"><i
                                            class="flaticon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="header-right">



                        <div class="cart single-btn">
                            <a data-bs-toggle="offcanvas" href="#cartOffcanvasSidebar" role="button"
                                aria-controls="cartOffcanvasSidebar" class="cart-btn header-btn">
                                <div class="btn-left">
                                    <i class="btn-icon flaticon-shopping-bag"></i>
                                    <span class="count totalCountItem">{{ cartCountItem() }}</span>
                                </div>
                                <div class="btn-right">
                                    <span class="btn-text">{{ __('Your Cart') }}</span>
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
                   
                    @foreach ($all_menus as $menu)
                        @if ($menu->submenus->count() == 0)
                            <li class="menu-item"><a class="menu-link"
                                    href="{{ $menu->url }}">{{ langConverter($menu->en_name, $menu->fr_name) }}</a>
                            </li>
                        @else
                            <li class="menu-item menu-item-has-children">
                                <a class="menu-link"
                                    href="#">{{ langConverter($menu->en_name, $menu->fr_name) }} <i
                                        class="arrow-icon fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    @foreach ($menu->submenus as $submenu)
                                        <li class="sub-menu-item"><a class="sub-menu-link"
                                                href="{{ $submenu->url }}">{{ langConverter($submenu->en_name, $submenu->fr_name) }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                    @endforeach
                    <li class="menu-item {{ Route::is('about.us') || Route::is('about.us*') ? 'active' : '' }}"><a
                            class="menu-link" href="{{ route('all.product') }}">Sản phẩm</a>
                    </li>
                    <li class="menu-item {{ Route::is('about.us') || Route::is('about.us*') ? 'active' : '' }}"><a
                            class="menu-link" href="{{ route('about.us') }}">{{ staticMenuName('about-us') }}</a>
                    </li>
                   
                    <li class="menu-item {{ Route::is('contact.us') || Route::is('contact.us*') ? 'active' : '' }}">
                        <a class="menu-link" href="{{ route('contact.us') }}">{{ staticMenuName('contact') }}</a>
                    </li>

                </ul>
            </nav>
        </div>
    </header>
</div>
