@extends('frontend.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/dynamic.css') }}">
@endsection
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
                            <li class="breadcrumb-item active">Privacy and Policy</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcrumb Area End ***** -->
    <section id="home" class="section pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="p-2">
                        {!! $data->page_content ?? '<h1>No content ! Please Add.</h1>' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
