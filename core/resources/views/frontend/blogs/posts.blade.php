@extends('frontend.master')
@section('seo')
    <title>{{ $metaSeo['title'] ?? ($globalSeo->title ?? '') }}</title>
    <meta name ="keywords" content="{{ $metaSeo['keywords'] ?? ($globalSeo->keywords ?? '') }}" />
    <meta name ="description" content="{{ $metaSeo['description'] ?? ($globalSeo->description ?? '') }}" />
    <meta name="author" content="{{ $metaSeo['site_name'] ?? ($globalSeo->site_name ?? '') }}">
    <meta name="url" content="{{ url('/') }}">
    <link rel="canonical" href="{{ url('/') }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $metaSeo['og_title'] ?? ($globalSeo->og_title ?? '') }}" />
    <meta property="og:description" content="{{ $metaSeo['og_description'] ?? ($globalSeo->og_description ?? '') }}" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:site_name" content="{{ $metaSeo['og_site_name'] ?? ($globalSeo->og_site_name ?? '') }}" />
    <meta property="og:updated_time" content="2023-08-27T19:00:37+05:30" />
    <meta property="og:image" content="{{ asset( $metaSeo['og_image'] ?? ($globalSeo->og_image ?? '') ) }}" />
    <meta property="article:published_time" content="2023-08-27T19:00:32+05:30" />
    <meta property="article:modified_time" content="2023-08-27T19:00:37+05:30" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $metaSeo['twitter_title'] ?? ($globalSeo->twitter_title ?? '') }}" />
    <meta name="twitter:description" content="{{ $metaSeo['twitter_description'] ?? ($globalSeo->twitter_description ?? '') }}" />
    <meta name="twitter:image" content="{{ asset( $metaSeo['twitter_image'] ?? ($globalSeo->twitter_image ?? '') ) }}" />
    <meta name="twitter:label1" content="Written by" />
    <meta name="twitter:data1" content="{{ $metaSeo['site_name'] ?? ($globalSeo->site_name ?? '') }}" />
    <!-- Meta Data For Seo Starts -->
@endsection

@section('content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <section class="section breadcrumb-area bg-gray d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Breamcrumb Content -->
                    <div class="breadcrumb-content text-center">
                        <ol class="breadcrumb d-flex justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section id="blog" class="section blog-area ptb_50 blog blog-right">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    @if(request()->routeIs('frontend/posts/category'))
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="mb-4 text-muted">Category : <span class="text-dark">{{ $rows[0]->category_name }}</span></h3>
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        @foreach($rows as $row)
                        <div class="col-12 col-md-6">
                            <!-- Single Blog -->
                            <div class="single-blog res-margin">
                                <!-- Blog Thumb -->
                                <div class="blog-thumb">
                                    <a href="#"><img src="{{ asset($row->feature_image) }}" alt=""></a>
                                </div>
                                <!-- Blog Content -->
                                <div class="blog-content p-4">
                                    <!-- Meta Info -->
                                    <ul class="meta-info d-flex justify-content-between">
                                        <li>By <a href="#">Admin</a></li>
                                        <li><a href="#">{{ date('M d, Y', strtotime($row->created_at)) }}</a></li>
                                    </ul>
                                    <!-- Blog Title -->
                                    <h3 class="blog-title my-3"><a href="{{ route('frontend/posts/details', ['slug' => $row->slug]) }}">{{ $row->title }}</a></h3>
                                    <p>{{ substr(strip_tags(preg_replace('/ .*".*"/', '', $row->description)), 0, 100) }}</p>
                                    <a href="{{ route('frontend/posts/details', ['slug' => $row->slug]) }}" class="blog-btn mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Pagination -->
                            {{ $rows->onEachSide(3)->links('frontend.elements.theme-pagination') }}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <aside class="sidebar pt-5 pt-lg-0">
                        <!-- Single Widget -->
                        <div class="single-widget">
                            <!-- Search Widget -->
                            <div class="widget-content search-widget">
                                <form action="#">
                                    <input type="text" placeholder="Enter your keywords">
                                </form>
                            </div>
                        </div>
                        <!-- Single Widget -->
                        <div class="single-widget">
                            <!-- Category Widget -->
                            <div class="accordions widget catagory-widget" id="cat-accordion">
                                <div class="single-accordion blog-accordion">
                                    <h5>
                                        <a role="button" class="collapse show text-uppercase d-block p-3" data-toggle="collapse" href="#accordion1">Categories
                                        </a>
                                    </h5>
                                    <!-- Category Widget Content -->
                                    <div id="accordion1" class="accordion-content widget-content collapse show" data-parent="#cat-accordion">
                                        <!-- Category Widget Items -->
                                        @include('frontend.blogs.includes.post-categories')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget -->
                        <div class="single-widget">
                            <!-- Post Widget -->
                            <div class="accordions widget post-widget" id="post-accordion">
                                <div class="single-accordion">
                                    <!-- Post Widget Items -->
                                    @include('frontend.blogs.includes.recent-post')
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget -->
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->
@endsection
