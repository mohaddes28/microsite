@extends('frontend.master')

@section('content')
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
                        <p class="mb-1"><a href="javascript:void(0)" onclick="getDownloadLink(1,this)" class="btn">Download YouTube Pro APK</a></p>
                        <p>
                        <div class="pt-1">
                            <a href="javascript:void(0)" onclick="getDownloadLink(0,this)" class="btn">Download MicroG</a>
                            <form action="{{ route('frontend/downloadByLink') }}" method="post" style="display:none;">
                                @csrf
                                <input type="hidden" name="app_id" value="microG">
                                <button class="btn-link pt-2" type="submit">Download MicroG</button>
                            </form>
                        </div>
                        </p>

                        <p class="text-body pt-4 fw-5" id="generating-link-loading" style="display: none; font-size: 20px; color: blue !important;"><i class="fa fa-spinner fa-spin"></i> Generating download link. Please wait...</p>
                        <div class="text-body pt-4 fw-5" id="latest-download-link" style="display: none">YouTube Pro Download Link:
                            <form action="{{ route('frontend/downloadByLink') }}" method="post">
                                @csrf
                                <input type="hidden" name="app_id" value="{{ $latest_app->id }}">
                                <button class="btn-link" type="submit">{{ str_replace('uploads/apps/','',$latest_app->file) }}</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-6 order-1 order-lg-2">
                    <!-- Discover Text -->
                    <div class="discover-text pt-4 pt-lg-0 px-0 px-lg-4">
                        <h3 class="pb-4">{!! $sectionData['installation']->title ?? '' !!}</h3>
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
                                    <td class="align-middle">{{ $app->version }}</td>
                                    <td class="align-middle mobile-nowrap">{{ $app->file_size }}</td>
                                    <td class="align-middle">
                                        <button class="btn custom-sm-btn" onclick="getDownloadLink(0,this)">Download</button>
                                        <form action="{{ route('frontend/downloadByLink') }}" method="post" style="display:none;">
                                            @csrf
                                            <input type="hidden" name="app_id" value="{{ $app->id }}">
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
