    @include('frontend.includes.header')
    <!-- ***** Header Start ***** -->
    @include('frontend.includes.header-nav')
    <!-- ***** Header End ***** -->

    @yield('content')

    @include('frontend.includes.footer')
