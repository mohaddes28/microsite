@extends('frontend.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/dynamic.css') }}">
@endsection
@section('seo')
    <title>{{ $metaSeo['title'] ?? ($globalSeo->title ?? '') }}</title>
    <meta name ="keywords" content="{{ $metaSeo['keywords'] ?? ($globalSeo->keywords ?? '') }}" />
    <meta name ="description" content="{{ $metaSeo['description'] ?? ($globalSeo->description ?? '') }}" />
    <meta name="author" content="{{ $metaSeo['site_name'] ?? ($globalSeo->site_name ?? '') }}">
    <meta name="url" content="{{ env('APP_URL') }}">
    <link rel="canonical" href="{{ env('APP_URL') }}" />
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
                            <li class="breadcrumb-item active">Download</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcrumb Area End ***** -->
    <section id="home" class="section ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <h1 class="mb-4 mt-4 mobile-mt-5 h1">{{ $sectionData['main']->title ?? '' }}</h1>
                    <hr>
                    <hr>
                </div>
                <div class="col-12 col-md-7 col-lg-6">
                    {!! $sectionData['main']->description ?? '' !!}
                    <div class="mt-4">
                        <p class="mb-1"><a href="javascript:void(0)" onclick="getDownloadLink(1,this)" class="btn">Download  {{ $globalSeo->site_name ?? 'Set Your Site Name' }}</a></p>
                        <p class="text-body pt-4 fw-5" id="generating-link-loading" style="display: none; font-size: 20px; color: blue !important;"><i class="fa fa-spinner fa-spin"></i> Generating download link. Please wait...</p>
                        <div class="text-body pt-4 fw-5" id="latest-download-link" style="display: none">YouTube Pro Download Link:
                            <form action="{{ route('frontend/downloadByLink') }}" method="post">
                                @csrf
                                <input type="hidden" name="app_id" value="{{ $latest_app->id ?? '' }}">
                                <button class="btn-link" type="submit">{{ str_replace('uploads/apps/','',$latest_app->file ?? '') }}</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-6 order-1 order-lg-2">
                    <!-- Discover Text -->
                    <div class="discover-text pt-4 pt-lg-0 px-0 px-lg-4">
                        <h2 class="pb-4">{!! $sectionData['installation']->title ?? '' !!}</h2>
                        {!! $sectionData['installation']->description ?? '' !!}
                        <p class="text-body pt-4 fw-5"><a class="scroll text-primary scroll" href="#youtube-pro-not-working">{{ $globalSeo->site_name ?? 'Set Your Site Name' }} Is Not Working? Get tips for resolving problem</a></p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="older-version" class="section service-area ptb_100 bg-gray">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <!-- Service Text -->
                    <div class="service-text pt-5 pt-lg-0 px-0 px-lg-4">
                        <h2 class="text-capitalize mb-1">Download {{ $globalSeo->site_name ?? 'Set Your Site Name' }} Older Version</h2>
                        <table class="table table-bordered text-center table-sm">
                            <thead class="bg-gray">
                            <tr>
                                <th>Version</th>
                                <th>Size</th>
                                <th style="width: 350px;">Download</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($old_apps as $app)
                                <tr>
                                    <td class="align-middle">{{ $app->version ?? '' }}</td>
                                    <td class="align-middle mobile-nowrap">{{ $app->file_size ?? '' }}</td>
                                    <td class="align-middle">
                                        <button class="btn custom-sm-btn" onclick="getDownloadLink(0,this)">Download</button>
                                        <form action="{{ route('frontend/downloadByLink') }}" method="post" style="display:none;">
                                            @csrf
                                            <input type="hidden" name="app_id" value="{{ $app->id ?? '' }}">
                                            <button class="btn-link" type="submit">Download Now</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="youtube-pro-not-working" class="section service-area overflow-hidden ptb_100">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <!-- Service Text -->
                    <div class="service-text pt-5 pt-lg-0 px-0 px-lg-4">
                        <h2 class="text-capitalize mb-1">{!! $sectionData['additional-content']->title ?? '' !!}</h2>
                        <!-- Service List -->
                        {!! $sectionData['additional-content']->description ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        function getDownloadLink(appType, ths) {
            if(appType === 1) {
                $('#latest-download-link').hide();
                $('#generating-link-loading').show();
                setTimeout(function(){
                    $('#generating-link-loading').hide();
                    $('#latest-download-link').show();
                }, 5000);
            }
            else {
                $(ths).html('<i class="fa fa-spinner fa-spin"></i> Generating download link. Please wait...').css({
                    'background':'transparent',
                    'box-shadow': 'none',
                    'color': '#000',
                    'font-size':'14px',
                    'pointer-events': 'none'
                });
                setTimeout(function(){
                    $(ths).hide();
                    $(ths).parent().find('form').show();
                }, 5000);
            }
        }
    </script>
@endsection
