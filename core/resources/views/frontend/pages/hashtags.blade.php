@extends('layouts.master')

@section('title')
    Hashtags
@endsection
@section('meta_keywords')
    Hashtags,Instagram hashtags,TikTok hashtags,Social media hashtags,Hashtag list,Hashtag generator,Trending hashtags,Popular hashtags,Hashtag research,Hashtag analytics
@endsection
@section('meta_description')
    Explore our comprehensive list of hashtags for Instagram, TikTok, and more. Get inspiration and increase your social media reach with our curated list. Check it out now!
@endsection

@section('body')
    <section class="relative py-8 items-center mt-28">
        <div class="container">
            <div class="grid grid-cols-1 justify-center mb-8">
                <h1 class="font-bold lg:leading-normal leading-normal text-2xl mb-5 text-center"><span style="text-transform: uppercase">Endless #Hashtags at Your Fingertips <br>Find Your Perfect Match with Our Extensive Collection!</span></h1>
            </div>
        </div><!--end container-->
    </section><!--end section-->

    <section class="relative pb-16">
        <div class="container">
            <div class="md:flex">
                <div class="lg:w-3/4 md:w-2/3 md:px-3 mt-[30px] md:mt-0">
                    <div class="border-gray-100 dark:border-gray-700">
                        <h5 class="text-xl font-semibold"></h5>

                        <div class="grid gap-4">
                            <div class="subcribe-form mt-2">
                                <form class="relative" method="post" onsubmit="searchCaptionsHandler(event)">
                                    <input type="text" value="{{ request()->input('q') }}" id="search_query" name="q" class="pt-1 pr-40 p-3 w-full h-[30px]  text-black dark:text-white bg-white/60 dark:bg-slate-900/60" style="border: solid 2px #a2abb3; border-radius: 3px;" autocomplete="off" />
                                    <button type="submit" class="btn absolute top-[2px] right-[3px] bg-indigo-600 hover:bg-indigo-700 border-indigo-700 hover:border-indigo-700 text-white" style="margin-top: 3px;border-radius: 6px;">Search</button>
                                </form><!--end form-->
                            </div>
                        </div>

                    </div>

                    <div class="lg:grid-cols-1 grid-cols-1 gap-[30px] p-3 text-indigo-600 rounded-md shadow mt-3">

                        <p class="mb-3 text-center bg-gray-50 rounded-md py-3">
                            @for($x = ord('A'); $x <= ord('Z'); $x++)
                                @if(chr($x) == 'N')
                                    {!! '<br>' !!}
                                @endif
                                <button class="border border-slate-300 px-4 py-2 mb-1 hover:bg-indigo-600/5 font-bold" style="width: 45px;height: 45px;" onclick="clickedAlphabetHandler('{{ chr($x) }}', this)">{{ chr($x) }}</button>
                            @endfor
                        </p>

                        <div class="grid md:grid-cols-12 grid-cols-1" id="content-holder">


                        </div>
                        <p class="text-center my-5">
                            <button class="border border-slate-300 px-4 py-2 hover:border-indigo-700" onclick="clickedPageHandler('p')" id="prev" disabled><i class="fa fa-angles-left"></i> PREV</button>
                            <button class="border border-slate-300 px-4 py-2 hover:border-indigo-700" onclick="clickedPageHandler('n')" id="next" disabled>NEXT <i class="fa fa-angles-right"></i></button>
                        </p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/3 md:px-3">
                    <div class="relative">
                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                            <x-hashtags.popular/>
                        </div>

                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900 mt-3">
                            <x-hashtags.most-search/>
                        </div>

                        <div class="mt-3" style="border-radius: 7px; overflow: hidden;">
                            <a href="{{ route('frontend/hashtagGenerator') }}"><img src="{{ asset('frontend/assets/images/caption-generator-banner.jpg') }}" alt="hashtags generator"></a>
                        </div>

                        <div class="mt-3">
                            <a href="#"><img src="{{ asset('frontend/assets/images/ads/wb-ad-1.png') }}" alt=""></a>
                        </div>

                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Hero -->

    <section class="relative py-10 items-center bg-gray-50">
        <div class="container">
            <div class="grid grid-cols-1 justify-center text-center">
                <div class="">
                    <h1 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Recent Published #Hashtags</h1>
                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] mt-8 text-left">
                        <x-hashtags.most-recent type="grid" take="12"/>
                    </div>
                    <div class="grid grid-cols-1 justify-center">
                        <div class="mt-6 text-center">
                            <a href="{{ route('frontend/hashtags') }}" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mr-2 mt-2">See More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection


@section('script')
    <script>
        let page = 1, numberOfRows = 31;
        let q = '';
        let alphabet = '';

        $(document).ready(() => {
            getHashTags();
        });

        //Handle search captions
        function searchCaptionsHandler(event){
            event.preventDefault();
            q = $('#search_query').val();
            getHashTags();
        }

        //Handle Alphabet clicked
        function clickedAlphabetHandler(character, currentElement){
            alphabet = character;

            getHashTags();
        }

        //Clicked Page Handler
        function clickedPageHandler(type){
            if(type === 'n')
                page++;

            if(type === 'p')
                page--;

            getHashTags();
        }

        //Get Caption ajax request
        function getHashTags(){
            const captionHolder = '#content-holder';

            $(captionHolder).html('<span class="col-span-12 text-center my-5" style="color: #d55002;font-size: 20px;"><i class="fa-solid fa-spinner fa-spin"></i> Loading...</span>')

            $.ajax({
                url: '{{ route('frontend/hashtag/all') }}',
                type:'post',
                dataType:'json',
                data:{
                    page: page,
                    numberOfRows: numberOfRows,
                    query: q,
                    alphabet: alphabet,
                    _token: $('meta[name=csrf-token]').attr('content')
                },
                success:function({status, data}) {
                    if(status === 200)
                    {
                        const {rows, total} = data;
                        if(total > 0) {
                            let renderedItems = '';
                            $.each(rows, function (i, item) {
                                renderedItems += renderCaption(item);
                            });
                            $(captionHolder).html(renderedItems);

                            managePagination(total);
                        }
                        else {
                            $(captionHolder).html('<span class="col-span-12 text-center my-5" style="color: red;">Hashtag not found</span>')
                        }
                    }
                    else if(status === 500)
                        console.error(data);
                }
            });
        }

        function managePagination(total){
            const totalPage = Math.ceil(total / numberOfRows);
            if(totalPage > page)
                $('#next').attr('disabled', false);
            else
                $('#next').attr('disabled', true);

            if(page > 1)
                $('#prev').attr('disabled', false);
            else
                $('#prev').attr('disabled', true);

        }
        function renderCaption({hashtag}){
            let route = '{{ route('frontend/hashtagDetails', ['slug'=> 'fakeSlug']) }}';
            route = route.replace('fakeSlug', hashtag);
            return `
                <div class="lg:col-span-4 md:col-span-6">
                    <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-2 rounded-md bg-white dark:bg-slate-900">
                        <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <i data-feather="hash" class="h-5 w-5 rotate-45"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium"><a href="${route}" target="_blank">${hashtag}</a></h4>
                        </div>
                    </div>
                </div>
            `;
        }

    </script>
@endsection
