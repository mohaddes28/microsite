@extends('layouts.master')

@section('title')
    {{ $caption->title }}
@endsection
@section('meta_keywords')
    {{ $caption->meta_keywords }}
@endsection
@section('meta_description')
    {{ $caption->meta_description }}
@endsection

@section('body')
    <section class="relative py-8 items-center mt-28">
        <div class="container">
            <div class="grid grid-cols-1 justify-center mb-8">
                <h1 class="font-bold lg:leading-normal leading-normal text-2xl mb-5 text-center"><span style="text-transform: uppercase">{{ $caption->title }}</span></h1>
                <p class="text-lg mx-auto text-justify">
                    @if(!empty($caption->description))
                        {{ $caption->description }}
                    @endif
                </p>
            </div>
        </div><!--end container-->
    </section><!--end section-->

    <section class="relative pb-10">
        <div class="container lg:mt-10 mt-10">
            <div class="md:flex">
                <div class="lg:w-3/4 md:w-2/3 md:px-3 mt-[30px] md:mt-0">

                    <h3 class="mb-1 md:text-2xl text-2xl md:leading-normal leading-normal font-semibold">Top 10 Instagram Caption For {{ $caption->keyword }} <button style="font-size: 14px;border: solid 1px blue;background: #6464fb;color:#fff;padding: 0px 6px;border-radius: 4px;margin-top: 10px;float: right;" type="button" onclick="copySection(this, 'top-captions')"><i class="uil uil-file-copy-alt"></i> Copy</button></h3>
                    <div class="rounded-md shadow dark:shadow-gray-800 p-3" id="best-hashtag">
                        <x-captions.top-caption-component take="10" captionId="{{ $caption->id }}"/>
                    </div>

                    <h3 class="mb-1 mt-10 md:text-2xl text-2xl md:leading-normal leading-normal font-semibold">Generate Live Instagram Caption For <span class="text-indigo-600"><i data-feather="instagram" style="display: inline; height: 18px;"></i>{{ $caption->keyword }}</span></h3>
                    <div class="rounded-md shadow dark:shadow-gray-800 p-3" id="similar-hashtag">
                        @include('components.caption-generator-fixed-layout')
                    </div>


                    <h3 class="mb-1 mt-10 md:text-2xl text-2xl md:leading-normal leading-normal font-semibold">Best Instagram Caption For {{ $caption->keyword }}  <button style="font-size: 14px;border: solid 1px blue;background: #6464fb;color:#fff;padding: 0px 6px;border-radius: 4px;margin-top: 10px;float: right;" type="button" onclick="copySection(this, 'best-captions')"><i class="uil uil-file-copy-alt"></i> Copy</button></h3>
                    <div class="rounded-md shadow dark:shadow-gray-800 p-3">
                        <x-captions.best-caption-component captionId="{{ $caption->id }}" take="40" skip="0"/>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/3 md:px-3">
                    <div class="relative">
                        <x-captions.sidebar-popular-caption-component take="10"/>
                        <x-captions.sidebar-most-search-caption-component take="10"/>
                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-3 bg-gray-50 dark:bg-slate-800">
                            <h5 class="text-lg font-semibold">FIND YOUR CAPTIONS</h5>
                            <form onsubmit="findHashTag(event)" class="relative mx-auto max-w-2xl" id="search-hashtag-form">
                                <input type="text" id="search-hashtag-fld" autocomplete="off" name="hashtag" class="w-full outline-none text-black dark:text-white rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 pl-3" style="height: 32px;">
                                <button type="submit" id="search-hashtag-btn" class="btn absolute top-[2px] right-[3px] h-[28px] bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded"><i data-feather="search" class="w-5 h-5 absolute top-[47%] -translate-y-1/2 left-3"></i></button>
                            </form>
                            <div class="border-t border-gray-100 dark:border-gray-700">
                                <ul class="list-none sidebar-nav mb-0 mt-3" id="search-hashtag-result" style="min-height: 25px;max-height: 430px;overflow-y: auto;">

                                </ul>
                            </div>
                        </div>

                        <div class="mt-3">
                            <a href="#"><img src="{{ asset('frontend/assets/images/ads/wb-ad-1.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-5">
        <div class="container">
            <div class="p-3">
{{--                <p class="border py-5 text-center rounded bg-indigo-600/5 border-indigo-600/20"><a href="#" class="text-indigo-600">Click here to view all(125) captions of {{ $caption->keyword }}</a></p>--}}
                <div id="accordion-collapseone" data-accordion="collapse">
                    <div class="relative shadow dark:shadow-gray-800 rounded-md overflow-hidden">
                        <h2 class="text-base font-semibold" id="accordion-collapse-heading-2">
                            <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-left border border-indigo-600/20 bg-indigo-600/5 rounded-md" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                <span>Click here to view all captions of {{ $caption->keyword }}</span>
                                <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5">
                                <x-captions.all-caption-component captionId="{{ $caption->id }}"/>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="relative py-10 items-center bg-gray-50">
        <div class="container">
            <x-captions.recent-captions-component/>
        </div>
    </section>

@endsection
@section('script')
    <script>


        function findHashTag(event){
            event.preventDefault();
            const searchKey = $('#search-hashtag-fld').val();
            const resultListId = '#search-hashtag-result';
            $(resultListId).empty();
            $(resultListId).append('<li>Loading...</li>');

            if(searchKey !== ''){
                $.ajax({
                    url: '{{ route('frontend/caption/find') }}',
                    type:'post',
                    dataType:'json',
                    data:{ searchKey:searchKey, _token: $('meta[name=csrf-token]').attr('content')},
                    success:function({status, data}) {
                        $(resultListId).empty();
                        if(status === 200)
                        {
                            $.each(data, function (i, {slug, keyword}) {
                                $(resultListId).append(`<li><a href="${APP_URL}/caption/${slug}">${keyword}</a><li>`);
                            });

                        }
                        else if(status === 500)
                            console.error(data);
                    }
                });
            }
        }
        function incrementLikeCount(selectedCaption, captionValueId){
            if(captionValueId !== ''){
                $.ajax({
                    url: '{{ route('frontend/caption/like') }}',
                    type:'post',
                    dataType:'json',
                    data:{ id:captionValueId, _token: $('meta[name=csrf-token]').attr('content')},
                    success:function({status, data}) {
                        if(status === 200)
                        {
                            $(selectedCaption).find('.count').text(data);
                            $(selectedCaption).attr('disabled', true);
                        }
                        else if(status === 500)
                            console.error(data);
                    }
                });
            }
        }

        function incrementDisLikeCount(selectedCaption, captionValueId){
            if(captionValueId !== ''){
                $.ajax({
                    url: '{{ route('frontend/caption/dislike') }}',
                    type:'post',
                    dataType:'json',
                    data:{ id:captionValueId, _token: $('meta[name=csrf-token]').attr('content')},
                    success:function({status, data}) {
                        if(status === 200)
                        {
                            $(selectedCaption).find('.dislike-count').text(data);
                            $(selectedCaption).attr('disabled', true);
                        }
                        else if(status === 500)
                            console.error(data);
                    }
                });
            }
        }

        function submitFavourit(selectedCaption, captionValueId){
            if(captionValueId !== ''){
                $.ajax({
                    url: '{{ route('frontend/caption/favourit') }}',
                    type:'post',
                    dataType:'json',
                    data:{ id:captionValueId, _token: $('meta[name=csrf-token]').attr('content')},
                    success:function({status, data}) {
                        if(status === 200)
                        {
                           $(selectedCaption).html('<i class="uil uil-heart-alt text-red-600"></i>');
                           $(selectedCaption).attr('disabled', true);
                        }
                        else if(status === 500)
                            console.error(data);
                    }
                });
            }
        }

        function generateCaptionHandler(event, keyword, captionId){
            event.preventDefault();
            $('#caption-generate-btn').attr('disabled', true).html('<i class="fa-solid fa-spinner fa-spin mr-1"></i> Generating...');
            $('#generated-caption-holder').css('display','block');
            $('#recent-generated-captions').html('<tr><td colspan="4" class="text-center py-5 text-red-600"><i class="fa-solid fa-spinner fa-spin"></i> Generating...</td></tr>');
            const tov = $('#tov').val();
            const language = $('#language').val();
            if(tov !== '' && language !== ''){
                $.ajax({
                    url: '{{ route('frontend/caption/generate') }}',
                    type:'post',
                    dataType:'json',
                    data:{
                        id: captionId,
                        keyword: keyword,
                        tov: tov,
                        language: language,
                        _token: $('meta[name=csrf-token]').attr('content')
                    },
                    success:function({status, data}) {
                        if(status === 200)
                        {
                            const recentCaptionTbody = $('#recent-generated-captions');
                            let counter = 1;

                            let renderedItems = null;
                            $.each(data, function (i, item) {
                                renderedItems += generateRowForRecentCaptionGenerate(i+counter, item);
                            });
                            recentCaptionTbody.html(renderedItems)
                        }
                        else if(status === 500)
                            console.error(data);
                        $('#caption-generate-btn').attr('disabled', false).text(`Generate`);
                    }
                });
            }
        }

        function generateRowForRecentCaptionGenerate(counter, {caption, likeCount, dislikeCount, favourite, id}){
            return `
                <tr>
                    <td class="text-center border-b border-gray-100 dark:border-gray-700 text-slate-400"><span style="width: 25px;height: 25px; border-radius: 50%; background: #e1e1e1;color: #4338CA;display: block;font-weight: bold;">${counter}</span></td>
                    <td class="whitespace-nowrap">
                        <button class="border hover:border-green-700 rounded-full px-3 text-green-600" onclick="incrementLikeCount(this, ${id})"><i class="uil uil-thumbs-up"></i> <span class="count">${likeCount}</span></button>
                        <button class="border hover:border-red-600 rounded-full px-3 text-red-600" onclick="incrementDisLikeCount(this, ${id})"><i class="uil uil-thumbs-down"></i> <span class="dislike-count">${dislikeCount}</span></button>
                    </td>
                    <td class="border-b border-gray-100 dark:border-gray-700">
                        <div class="flex items-center">
                            <div class="ml-4 hover:text-indigo-600 text-lg font-semibold">
                                ${caption}
                            </div>
                        </div>
                    </td>
                    <td class="text-right border-b border-gray-100 dark:border-gray-700 whitespace-nowrap">
                        <button class="btn btn-link font-medium hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out" onclick="submitFavourit(this, ${id})" ${favourite === 1 ? 'disabled' : ''}><i class="uil uil-heart-alt text-slate-400"></i></button>
                        <button class="btn btn-link font-medium hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out" caption="${caption}" onclick="copyCaption(this)"><i class="uil uil-file-copy-alt"></i></button>
                    </td>
                </tr>
            `
        }

        const copySection = async (btn, id) =>{
            let text = document.getElementById(id).innerHTML;
            try {
                await navigator.clipboard.writeText(text);
                $(btn).html('<i class="uil uil-check"></i> Copied');
                setTimeout(function(){ $(btn).html('<i class="uil uil-file-copy-alt"></i> Copy') }, 2000);
            } catch (err) {
                console.error('Failed to copy: ', err);
            }
        }

        function copyCaption($this) {
            var $caption = $($this).attr('caption');
            navigator.clipboard.writeText($caption).then(function() {
                $($this).html('<i class="uil uil-check text-{green}"></i>');
                setTimeout(function(){ $($this).html('<i class="uil uil-file-copy-alt"></i>') }, 2000);
            }, function(err) {
                $($this).html('<i class="uil uil-check text-{red}"></i>');
                setTimeout(function(){ $($this).html('<i class="uil uil-times"></i>') }, 2000);
            });
        }

    </script>
@endsection
