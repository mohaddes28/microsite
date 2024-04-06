@extends('layouts.master')

@section('title')
   Hashtag Generator
@endsection
@section('meta_keywords')
    Hashtag generator, Instagram hashtags generator, TikTok hashtags generator, Hashtag ideas, Hashtag research, Trending hashtags, Popular hashtags, Hashtag analytics, Hashtag generator tools, Hashtag generator online
@endsection
@section('meta_description')
    Boost your social media reach with our free hashtag generator tool. Generate relevant and popular hashtags for Instagram, TikTok, and more. Try it now!
@endsection

@section('body')
    <!-- Start Hero -->
    <section class="relative py-36 items-center">
        <div class="container">
            <div class="grid grid-cols-1 justify-center text-center">
                <div class="">
                    <h1 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">HASHTAG GENERATOR</h1>
                    <p class="text-lg max-w-xl mx-auto">Generate your favourite hashtags for your business using our powerful hashtag generator. Grow your business.</p>

                    <div class="subcribe-form mt-6 mb-3">
                        <section class="py-6 border-b-[3px] dark:border-gray-700 shadow dark:shadow-gray-800 rounded-md bg-gray-50 dark:bg-slate-800">
                            <div class="container">
                                <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Generate Hashtag For</h3>

                                <ul class="list-none text-center py-2">
                                    <li class="inline"><a href="#" style="pointer-events: none;" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400"><img src="{{ asset('frontend/assets/images/social-icons/facebook.png') }}" class="h-6" alt=""></a></li>
                                    <li class="inline"><a href="#" style="pointer-events: none;" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400"><img src="{{ asset('frontend/assets/images/social-icons/instagram.png') }}" class="h-6" alt=""></a></li>
                                    <li class="inline"><a href="#" style="pointer-events: none;" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400"><img src="{{ asset('frontend/assets/images/social-icons/tiktok.png') }}" class="h-6" alt=""></a></li>
                                    <li class="inline"><a href="#" style="pointer-events: none;" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400"><img src="{{ asset('frontend/assets/images/social-icons/youtube.png') }}" class="h-6" alt=""></a></li>
                                    <li class="inline"><a href="#" style="pointer-events: none;" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400"><img src="{{ asset('frontend/assets/images/social-icons/twitter.png') }}" class="h-6" alt=""></a></li>
                                    <li class="inline"><a href="#" style="pointer-events: none;" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400"><img src="{{ asset('frontend/assets/images/social-icons/linkedin.png') }}" class="h-6" alt=""></a></li>
                                </ul>

                            </div><!--end container-->
                            <form class="relative max-w-xl mx-auto hashtag-generator-form" action="{{ route('frontend/hashtagGenerator/store') }}" method="post">
                                @csrf
                                @method('POST')
                                <input type="hidden" name="g" value="1">
                                <input type="text" id="hashtag" autocomplete="off" required name="hashtag" class="pt-4 pr-40 pb-4 pl-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white/60 dark:bg-slate-900/60 shadow dark:shadow-gray-800" placeholder="# Type your hashtag">
                                <button type="submit" class="btn absolute top-[2px] right-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full">Generate</button>
                            </form><!--end form-->
                        </section><!--end section-->
                    </div>

                    <span class="font-medium">Looking for others help? <a href="{{ route('frontend/contact') }}" class="text-indigo-600">Get in touch with us</a></span>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Hero -->



    <section class="relative py-16 bg-gray-50">
        <div class="container">
            <h1 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 px-3">Recent Published #Hashtags</h1>
            <div class="md:flex">

                <div class="lg:w-3/4 md:w-2/3 md:px-3 mt-[30px] md:mt-0">
                    <div class="">
                        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] text-left">
                            <x-hashtags.most-recent type="grid" take="18"/>
                        </div>
                        <div class="grid grid-cols-1 justify-center">
                            <div class="mt-6 text-center">
                                <a href="{{ route('frontend/hashtags') }}" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mr-2 mt-2">See More <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/3 md:px-3">
                    <div class="relative">
                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 mb-3 bg-gray-50 dark:bg-slate-800">
                            <h5 class="text-lg font-semibold">FIND YOUR HASHTAGS</h5>
                            <form class="relative mx-auto max-w-2xl" id="search-hashtag-form">
                                <input type="text" id="search-hashtag-fld" autocomplete="off" name="hashtag" class="w-full outline-none text-black dark:text-white rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 pl-3" style="height: 32px;">
                                <button type="submit" id="search-hashtag-btn" class="btn absolute top-[2px] right-[3px] h-[28px] bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded"><i data-feather="search" class="w-5 h-5 absolute top-[47%] -translate-y-1/2 left-3"></i></button>
                            </form><!--end form-->
                            <div class="border-t border-gray-100 dark:border-gray-700">
                                <ul class="list-none sidebar-nav mb-0 mt-3" id="search-hashtag-result" style="min-height: 25px;max-height: 430px;overflow-y: auto;">

                                </ul>
                            </div>
                        </div>

                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                            <x-hashtags.popular/>
                        </div>

                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900 mt-3">
                            <x-hashtags.most-search/>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->


    <!-- Start -->
    <section class="relative py-16">
        <div class="container">

            <div class="grid grid-cols-1 text-center md:px-3">
                <div class="" style="background: #DAE8EE;border-left: solid 15px #99A3A7;border-right: solid 15px #99A3A7;color: #445258;font-weight: 300;font-size: 18px;text-align: left;padding: 30px 15px;font-family: Poppins;line-height: 30px;">
                    <p>Get 100% authentic and real time hashtags data with our hashtag checker. All data is collected from official websites</p>
                    <br>
                    <p>Our hashtags checker provides detailed analytics, such as the number of posts using the hashtag, the number of followers using the hashtag, and the reach of the hashtag.</p>
                    <br>
                    <p>With the help of our hashtags checker, you can find the most trending hashtags and discover new ones to help boost your social media presence.</p>
                </div>
            </div>
            <br>
            <div class="grid grid-cols-1 text-center md:px-3">
                <div class="" style="font-weight: 300;font-size: 18px;text-align: left;padding: 30px 15px;font-family: Poppins;">
                    <div class="flex">
                        <div class="flex align-middle justify-center items-center min-w-[56px] h-[56px] bg-indigo-600/5 border-2 border-indigo-600/20 text-indigo-600 rounded-lg text-xl shadow-sm dark:shadow-gray-800">
                            <i class="uil uil-question-circle"></i>
                        </div>

                        <div class="content ml-6">
                            <h3 class="text-lg font-medium hover:text-indigo-600">Why should you use our hashtag generator?</h3>
                            <p class="text-slate-400 mt-3">Our hashtag generator is the perfect solution for customers who need to create effective and engaging hashtags for their social media content. It helps customers generate relevant hashtags for their campaigns quickly and easily, and provides detailed analytics on the effectiveness of their hashtags. This allows customers to maximize the reach and impact of their campaigns, ensuring that their content reaches the largest possible audience. Additionally, the hashtag generator uses only official data sources so customers can be sure that their hashtags are 100% authentic and up-to-date.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 text-center md:px-3">
                <div class="" style="font-weight: 300;font-size: 18px;text-align: left;padding: 30px 15px;font-family: Poppins;">
                    <div class="flex">
                        <div class="flex align-middle justify-center items-center min-w-[56px] h-[56px] bg-indigo-600/5 border-2 border-indigo-600/20 text-indigo-600 rounded-lg text-xl shadow-sm dark:shadow-gray-800">
                            <i class="uil uil-comparison"></i>
                        </div>

                        <div class="content ml-6">
                            <h3 class="text-lg font-medium hover:text-indigo-600">Why our hashtag generator best compared to other?</h3>
                            <p class="text-slate-400 mt-3">Our hashtag generator is the best compared to others because it is extremely user friendly and easy to use. It is free to use, so you don't have to worry about any costs. Moreover, it provides authentic and real time data, so you can be sure that the data you are using is accurate and up-to-date. In addition, it has a maximum data accuracy rate, which means that you can trust the data you are receiving. Finally, it has much more features than other hashtag generators, so you can get more out of your hashtag generation experience.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 text-center md:px-3">
                <div class="" style="font-weight: 300;font-size: 18px;text-align: left;padding: 30px 15px;font-family: Poppins;">
                    <div class="flex">
                        <div class="flex align-middle justify-center items-center min-w-[56px] h-[56px] bg-indigo-600/5 border-2 border-indigo-600/20 text-indigo-600 rounded-lg text-xl shadow-sm dark:shadow-gray-800">
                            <i class="uil uil-cloud-question"></i>
                        </div>

                        <div class="content ml-6">
                            <h3 class="text-lg font-medium hover:text-indigo-600">How does our hashtag generator work?</h3>
                            <p class="text-slate-400 mt-3">The hashtag generator works by collecting data from official websites and analyzing it for common topics, trends, and keywords. It then filters the data to find the most popular hashtags that are related to the topic at hand. It then generates a list of potential hashtags that can be used for a given situation. The goal of the hashtag generator is to help users find the best hashtags to use in their content to help increase their visibility and engagement on social media platforms. The hashtag generator also allows users to customize their search parameters, so they can get more specific hashtags that are tailored to their needs. The hashtag generator can also be used to research the use of hashtags in popular posts, giving users an insight into the most successful hashtags on the platform.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--end container-->
    </section>

    @component('frontend.templates.service-template')@endcomponent
@endsection

@section('script')
    <script>

        $('#search-hashtag-form').submit(function (e){
            e.preventDefault();
            let spinner = '<li class="navbar-item account-menu"><h6 class="mb-0 font-semibold" style="font-size: 14px;color: red;text-align: center;"><i class="uil uil-spinner-alt"></i> Loading... please wait</h6></li>';
            let hashtagFld = $('#search-hashtag-fld');
            let squery = hashtagFld.val();

            if(squery !== ''){
                hashtagFld.attr('readonly', true);
                $('#search-hashtag-btn').prop('disabled', true);
                $('#search-hashtag-result').html(spinner);
                $.ajax({
                    url: APP_URL + '/api/hashtag/search',
                    type: 'post',
                    dataType: 'html',
                    data: {squery: squery,  _token: $('meta[name=csrf-token]').attr('content')},
                    success: function (res) {
                        $('#search-hashtag-result').html(res);
                        hashtagFld.attr('readonly', false);
                        $('#search-hashtag-btn').prop('disabled', false);
                    }
                });
            }
        });

    </script>
@endsection
