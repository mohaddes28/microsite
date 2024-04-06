@extends('frontend.master')

@section('content')
    <!-- ***** Welcome Area Start ***** -->
    <section id="home" class="section welcome-area overflow-hidden ptb_100">
        <div class="container">
            <div class="row align-items-center">
                <!-- Welcome Intro Start -->
                <div class="col-12 col-md-7 col-lg-6">
                    <div class="welcome-intro">
                        <h1>{!! $sectionData['main-section']->title ?? '' !!}</h1>
                        {!! $sectionData['main-section']->description ?? '' !!}
                        <!-- Store Buttons -->
                        <div class="button-group store-buttons d-flex">
                            <h2><a href="{{ route('frontend/download') }}" class="btn">YouTube Pro APK Download</a></h2>
{{--                            <a href="#" class="btn">Download Revanced</a>--}}
                        </div>
                        <p class="text-body pt-4 fw-5">Available {{ $globalSeo->site_name ?? 'Set Your Site Name' }} older version, <a href="{{ route('frontend/download') }}#older-version">download</a> from here</p>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-6">
                    <!-- Welcome Thumb -->
                    <div class="welcome-thumb mx-auto">
                        <img src="{{ asset($sectionData['main-section']->image ?? '') }}" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <section id="about" class="section discover-area bg-gray overflow-hidden">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-lg-4 order-2 order-lg-1">
                    <!-- Discover Thumb -->
                    <div class="service-thumb discover-thumb mx-auto pt-5 pt-lg-0">
                        <img src="{{ asset($sectionData['about-section']->image ?? '' ) }}" alt="About YouTube Pro APK">
                    </div>
                </div>
                <div class="col-12 col-lg-8 order-1 order-lg-2">
                    <!-- Discover Text -->
                    <div class="discover-text pt-4 pt-lg-0 px-0 px-lg-4">
                        <h2 class="pb-4">{{ $sectionData['about-section']->title ?? '' }}</h2>
                        <!-- Service List -->
                        {!! $sectionData['about-section']->description ?? ''  !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 pt-5">
                    {!! $sectionData['about-section']->more_content ?? '' !!}
                </div>
            </div>

        </div>
    </section>

    <section id="features" class="section features-area ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2 class="mb-4">{!! $sectionData['feature-section']->title ?? ''  !!}</h2>
                        {!! $sectionData['feature-section']->description ?? '' !!}
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($features as $feature)
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Icon Box -->
                        <div class="icon-box text-center p-4">
                            <!-- Featured Icon -->
                            <div class="featured-icon mb-3">
                                <img src="{{ asset($feature->icon) }}" width="60" alt="">
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">{!! $feature->name  !!} </h3>
                                <div class="text-justify">{!! $feature->description !!}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="download" class="section download-area bg-gray ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <!-- Download Text -->
                    <div class="download-text text-center">
                        <h2 class="">{!! $sectionData['download-section']->title ?? '' !!}</h2>
                        {!! $sectionData['download-section']->description ?? ''  !!}
                        <!-- Store Buttons -->
                        <div class="button-group store-buttons d-flex justify-content-center">
                            <h2><a href="{{ route('frontend/download') }}" class="btn">YouTube Pro APK Download</a></h2>
                            <h2 class="ml-1"><a href="{{ route('frontend/download') }}" class="btn">MicroG APK Download</a></h2>
                        </div>
                        <p class="text-body pt-4 fw-5">Available youtube pro apk older version, <a href="{{ route('frontend/download') }}#older-version">download</a> from here</p>
                    </div>
                </div>

                <div class="col-md-6">
                    {!! $sectionData['feature-section']->more_content ?? '' !!}
                </div>

            </div>
        </div>
    </section>

    <!-- ***** install Area Start ***** -->
    <section class="section service-area overflow-hidden ptb_50 pt-0">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <!-- Service Text -->
                    <div class="service-text pt-5 pt-lg-0 px-0 px-lg-4">
                        <h2 class="mb-4">{!! $sectionData['install-section']->title ?? '' !!}</h2>
                        <!-- Service List -->
                        {!! $sectionData['install-section']->description ?? '' !!}
                        <br>
                        <!-- Play Button -->
                        <a class="play-btn btn mt-3" data-fancybox="" href="{{ asset( $sectionData['install-section']->video ?? '' ) }}">
                            <div class="btn-circle play-animation"></div>
                            <div class="btn-circle play-animation animation-short"></div>
                            <!-- Play Icon -->
                            <div class="play-icon">
                                Play Video
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-6 order-1 order-lg-2">
                    <!-- Service Thumb -->
                    <div class="service-thumb mx-auto text-center">
                        <img src="{{ asset( $sectionData['install-section']->image ?? '' ) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** install Area end ***** -->

    <!-- ***** Work Area Start ***** -->
    <section id="installation" class="section work-area overflow-hidden ptb_100 pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <!-- Work Content -->
                    <div class="work-content text-center mb-4">
                        <h2 class="mb-3">{!! $sectionData['working-section']->title ?? '' !!}</h2>
                        {!! $sectionData['working-section']->description ?? '' !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3 border rounded">
                    <!-- Single Work -->
                    <div class="single-work text-center p-3">
                        <!-- Work Icon -->
                        <div class="work-icon">
                            <img class="avatar-md" src="{{ asset('frontend/assets/images/work/youtube-pro-apk-download.png') }}" alt="">
                        </div>
                        <h3 class="py-3">Download App</h3>
                        <p class="text-justify">Start by downloading YouTube Pro from a trusted source, making sure to allow apps from unknown sources in your settings.</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 border rounded">
                    <!-- Single Work -->
                    <div class="single-work text-center p-3">
                        <!-- Work Icon -->
                        <div class="work-icon">
                            <img class="avatar-md" src="{{ asset('frontend/assets/images/work/youtube-pro-apk-install.png') }}" alt="">
                        </div>
                        <h3 class="py-3">Install YouTube Pro</h3>
                        <p class="text-justify">To install the app on your smartphone, open the downloaded APK file and adhere to the prompts that appear on the screen.</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 border rounded">
                    <!-- Single Work -->
                    <div class="single-work text-center p-3">
                        <!-- Work Icon -->
                        <div class="work-icon">
                            <img class="avatar-md" src="{{ asset('frontend/assets/images/work/youtube-pro-apk-signin.png') }}" alt="">
                        </div>
                        <h3 class="py-3">Sign In with Your Gmail Account</h3>
                        <p class="text-justify">Activate the YouTube Pro APK. A popup to sign in using your Gmail account will appear. The app could recognise your account automatically if Gmail is currently open on your device.</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 border rounded">
                    <!-- Single Work -->
                    <div class="single-work text-center p-3">
                        <!-- Work Icon -->
                        <div class="work-icon">
                            <img class="avatar-md" src="{{ asset('frontend/assets/images/work/youtube-pro-apk-features.png') }}" alt="">
                        </div>
                        <h3 class="py-3">Enjoy the Features</h3>
                        <p class="text-justify">You may start using YouTube Pro's improved features as soon as you sign in. Ad-free surfing, background playing, offline video downloads, video quality control, customisable themes, picture-in-picture mode, and other features are among them.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Work Area End ***** -->

    <!-- ***** Screenshots Area Start ***** -->
    <section id="screenshots" class="section screenshots-area bg-gray ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                                <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                                    <i class="far fa-lightbulb text-primary mr-1"></i>
                                    <span class="text-primary">Awesome</span>
                                    Interface
                                </span>
                        <h2 class="text-capitalize mb-4">{!! $sectionData['screenshot-section']->title ?? '' !!} </h2>
                        {!! $sectionData['screenshot-section']->description ?? '' !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- App Screenshot Slider Area -->
                    <div class="app-screenshots">
                        <!-- Single Screenshot Item -->
                        @foreach($screenshots as $screenshot)
                            <div class="single-screenshot">
                                <img src="{{ asset($screenshot->image) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Screenshots Area End ***** -->

    @if(count($latestBlogs) > 0)
        <section class="section blog-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Reads Our Latest Blog</h2>
    {{--                        <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>--}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($latestBlogs as $blog)
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Blog -->
                        <div class="single-blog res-margin">
                            <!-- Blog Thumb -->
                            <div class="blog-thumb">
                                <a href="#"><img src="{{ asset($blog->feature_image) }}" alt=""></a>
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content p-4">
                                <!-- Blog Title -->
                                <h3 class="blog-title my-3"><a href="{{ route('frontend/posts/details', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a></h3>
                                <p>{{ strip_tags(preg_replace('/ .*".*"/', '', $blog->description)) }}</p>
                                <a href="{{ route('frontend/posts/details', ['slug' => $blog->slug]) }}" class="blog-btn mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="{{ route('frontend/posts') }}" class="btn sApp-btn mt-4">Read More Posts</a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section id="faqs" class="section faq-area ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Have questions? Look here</h2>
{{--                        <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>--}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- FAQ Content -->
                    <div class="faq-content">
                        <!-- sApp Accordion -->
                        <div class="accordion" id="sApp-accordion">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-lg-8">
                                    <!-- Single Accordion Item -->
                                    @foreach($faqs as $key => $faq)
                                        <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-3 collapsed" type="button" data-toggle="collapse" data-target="#collapse-{{ $key }}" aria-expanded="false">
                                                        {{ $faq->question }}
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapse-{{ $key }}" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    {!! $faq->answer !!}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
