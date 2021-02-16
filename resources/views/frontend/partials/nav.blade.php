<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar container py-0 bg-white customization-header-background-color" role="banner"
    style="max-width:100%!important;top:0;">

    <!-- <div class="container"> -->
    <div class="row align-items-center">

        <div class="col-8 col-xl-2 pr-0">

            @if(!empty($site_global_settings->setting_site_logo))
            <h1 class="mb-0 site-logo">
                <a href="{{ route('page.home') }}" class="text-black mb-0 customization-header-font-color">
                    @foreach(explode(' ', empty($site_global_settings->setting_site_name) ? config('app.name',
                    'Laravel') : $site_global_settings->setting_site_name) as $key => $word)
                    @if($key/2 == 0)
                    {{ $word }}
                    @else
                    <span class="text-primary">{{ $word }}</span>
                    @endif
                    @endforeach

                </a>
            </h1>
            @else
            <h1 class="mb-0 mt-1 site-logo">
                <a href="{{ route('page.home') }}" class="text-black mb-0">
                    <img class="full" style="
                        width: 58% !important;
                    " alt="" data-src="http://gigworldgo.com/assets/uploads/media-uploader/logo1588283745.gif"
                        src="http://gigworldgo.com/assets/uploads/media-uploader/logo1588283745.gif">
                </a>
            </h1>
            @endif


        </div>
        <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

                <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block pl-4">
                    <li>
                        <a href="https://gigworldgo.com">{{ \App\Setting::lang("Home",Session::get('lang')) }} </a>
                    </li>
                    <li class="menu-item-has-children has-children">
                        <a href="https://gigworldgo.com/about">{{ \App\Setting::lang("About Us",Session::get('lang')) }} </a>
                        <ul class="sub-menu dropdown">
                            <li>
                                <a href="https://gigworldgo.com/about">{{ \App\Setting::lang("About Us",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="https://gigworldgo.com/p/78/why-gig222">{{ \App\Setting::lang("Why GIG?",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a
                                    href="https://gigworldgo.com/p/79/the-features-and-advantages-that-gig-brings-to-you222222">{{ \App\Setting::lang("The
                                    features and advantages that GIG brings to you",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="https://gigworldgo.com/p/80/our-services2">{{ \App\Setting::lang("Our Services",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="https://gigworldgo.com/team">{{ \App\Setting::lang("Team",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="https://gigworldgo.com/career">{{ \App\Setting::lang("Career With Us",Session::get('lang')) }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children has-children">
                        <a href="https://gigworldgo.com/service">{{ \App\Setting::lang("Service",Session::get('lang')) }} </a>
                        <ul class="sub-menu dropdown">
                            <li>
                                <a href="/gigs/category/1/educational-services">{{ \App\Setting::lang("Educational Services",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="/gigs/category/2/export-services-and-import">{{ \App\Setting::lang("Export Services And Import",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="/gigs/category/3/legal-services">{{ \App\Setting::lang("Legal Services",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="/gigs/category/4/real-estate">{{ \App\Setting::lang("Real Estate",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="/gigs/category/5/restaurant-requests">{{ \App\Setting::lang("Restaurant Requests",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="/gigs/category/6/accounting-and-legal-audit-services">{{ \App\Setting::lang("Accounting And Legal
                                    Audit Services",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="/gigs/category/7/livestock-development">{{ \App\Setting::lang("Livestock Development",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="/gigs/category/29/agricultural-investment-services">{{ \App\Setting::lang("Agricultural Investment
                                    Services",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="/gigs/category/31/human-development">{{ \App\Setting::lang("Human Development",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="/gigs/category/30/advertising-services">{{ \App\Setting::lang("Advertising Services",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="/gigs/category/32/marriage-service">{{ \App\Setting::lang("Marriage Service",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="/gigs/category/33/visa-services">{{ \App\Setting::lang("Visa Services",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="https://gigworldgo.com/events">{{ \App\Setting::lang("Events",Session::get('lang')) }}</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://gigworldgo.com/our-works">{{ \App\Setting::lang("Our Works",Session::get('lang')) }} </a>
                    </li>
                    <li class="menu-item-has-children has-children">
                        <a href="http://ourstore.gigworldgo.com/">{{ \App\Setting::lang("Our Store",Session::get('lang')) }} </a>
                        <ul class="sub-menu dropdown">
                            <li>
                                <a href="http://ourstore.gigworldgo.com/">{{ \App\Setting::lang("Our Products",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="http://ourstore.gigworldgo.com/categories">{{ \App\Setting::lang("Our categories",Session::get('lang')) }}</a>
                            </li>
                            <li>
                                <a href="https://gigworldgo.com/login/admin">{{ \App\Setting::lang("Join as seller",Session::get('lang')) }}</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://gigworldgo.com/blog">{{ \App\Setting::lang("Blog",Session::get('lang')) }} </a>
                    </li>
                    <li>
                        <a href="https://gigworldgo.com/contact">
                            {{ \App\Setting::lang("Contact",Session::get('lang')) }}</a>
                    </li>
                    @guest
                    <li class="ml-xl-3 login"><a href="{{ route('login') }}"><span
                                class="border-left pl-xl-4"></span>{{ __('frontend.header.login') }}</a></li>
                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">{{ __('frontend.header.register') }}</a></li>
                    @endif
                    @else
                    <li class="has-children">
                        <a href="#">{{ Auth::user()->name }}</a>
                        <ul class="dropdown">
                            <li>
                                @if(Auth::user()->isAdmin())
                                <a href="{{ route('admin.index') }}">{{ __('frontend.header.dashboard') }}</a>
                                @else
                                <a href="{{ route('user.index') }}">{{ __('frontend.header.dashboard') }}</a>
                                @endif
                            </li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('auth.logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                    <li>
                        @guest
                        <a href="{{ route('user.items.create') }}" class="cta"><span
                                class="bg-primary text-white rounded"><i class="fas fa-plus mr-1"></i>
                                {{ __('frontend.header.list-business') }}</span></a>
                        @else
                        @if(Auth::user()->isAdmin())
                        <a href="{{ route('admin.items.create') }}" class="cta"><span
                                class="bg-primary text-white rounded"><i class="fas fa-plus mr-1"></i>
                                {{ __('frontend.header.list-business') }}</span></a>
                        @else
                        <a href="{{ route('user.items.create') }}" class="cta"><span
                                class="bg-primary text-white rounded"><i class="fas fa-plus mr-1"></i>
                                {{ __('frontend.header.list-business') }}</span></a>
                        @endif
                        @endguest
                    </li>
                </ul>
            </nav>
        </div>


        <div class="d-inline-block d-xl-none ml-auto py-3 col-4 text-right" id="menu-mobile-div">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
        </div>

    </div>
    <!-- </div> -->

</header>