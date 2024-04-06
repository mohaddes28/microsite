@extends('layouts.master')

@section('title')
   Caption Generator
@endsection
@section('meta_keywords')
    Instagram caption generator, Caption ideas for Instagram,Instagram post captions,Caption templates,Creative Instagram captions, Instagram caption inspiration, Instagram caption examples, Instagram caption tips, Best Instagram captions
@endsection
@section('meta_description')
    Create catchy captions for your social media posts with our free caption generator tool. Get creative and engaging captions for Instagram, TikTok, and more. Try it now!
@endsection

@section('body')

    @if($db_captions != null)
        <section class="relative py-10 pb-16" style="margin-top: 5rem;">
            <div class="container">
                <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">

                    <div class="lg:col-span-8 md:col-span-6 rounded-md shadow dark:shadow-gray-800 bg-white p-5">
                        <div class="grid md:grid-cols-12 grid-cols-2 border-b border-gray-100 pb-3">
                            <div class="lg:col-span-8 md:col-span-4">
                                <h6 class="text-slate-500 font-bold"><span class="text-indigo-600">{{ count(json_decode($db_captions->captions)) }}</span> catchy captions with <span class="text-indigo-600">{{ $db_captions->keyword }}</span></h6>
                            </div>
                            <div class="lg:col-span-4 md:col-span-4 text-right">
                                <div id="all-db-caption" value="@foreach(json_decode($db_captions->captions) as $index=>$caption){{ $caption.', ' }}@endforeach"  style="display: none;"></div>
                                <button class="btn btn-link font-medium hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out text-indigo-600" style="background: #e8e4fb;color: #2005fd;padding: 2px 6px;border-radius: 4px;font-size: 14px;" onclick="copyAllDbCaption(this)"><i class="uil uil-file-copy-alt"></i> Copy All</button>
                            </div>
                        </div>

                        <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900">
                            <table class="w-full text-left">
                                <tbody>
                                    @foreach(json_decode($db_captions->captions) as $index=>$caption)
                                        <tr>
                                            <td class="text-center border-b border-gray-100 dark:border-gray-700 text-slate-400"><span style="width: 23px;height: 23px; border-radius: 50%; background: #e1e1e1;color: #4338CA;display: block;font-weight: bold;font-size: 12px;">{{ ++$index }}</span></td>
                                            <td class="p-1 border-b border-gray-100 dark:border-gray-700">
                                                <div class="flex items-center">
                                                    <div class="ml-1 hover:text-indigo-600 text-lg font-semibold">
                                                        {{ $caption }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right border-b border-gray-100 dark:border-gray-700">
                                                <button class="btn btn-link font-medium hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out" caption="{{ $caption }}"  onclick="copyCaption(this)"><i class="uil uil-file-copy-alt"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="lg:col-span-4 md:col-span-6 rounded-md shadow dark:shadow-gray-800 bg-white p-5">
                        <h4 class="mb-4 md:leading-normal leading-normal font-bold text-slate-500"><i class="uil uil-instagram-alt" style="background: #e8e4fb;color: #6D28D9;padding: 1px 3px;border-radius: 4px;font-size: 14px;"></i> Most popular captions you may like</h4>
                        <ul class="list-none sidebar-nav mb-0 mt-3" id="navmenu-nav">
                                <li class="navbar-item account-menu">
                                    <a href="#" class="navbar-link text-slate-400 flex items-center rounded">
                                        <h6 class="mb-0 font-semibold">LOVE</h6>
                                    </a>
                                </li>
                        </ul>
                    </div>

                </div><!--end grid-->
            </div><!--end container-->
        </section>
    @else
        <div style="margin-top: 5rem;"></div>
    @endif

    <section class="relative py-10 bg-gray-50">
        <div class="container">

            <div class="grid grid-cols-1 justify-center text-center mb-8">
                <h1 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">INSTAGRAM CAPTION GENERATOR</h1>
                <p class="text-lg max-w-xl mx-auto">Generate your favourite captions for your business using our powerful caption generator. Grow your business.</p>
            </div>

            @include('components.caption-generator')

        </div><!--end container-->
    </section>

    <section class="relative py-10">
        <div class="container">
            <div class="grid grid-cols-12 gap-[30px]">
                <div class="lg:col-span-4">
                    <div class="grid grid-cols-1">
                        <x-captions.sidebar-popular-caption-component take="10"/>
                    </div>
                </div>
                <div class="lg:col-span-4">
                    <div class="grid grid-cols-1">
                        <x-captions.sidebar-most-search-caption-component take="10"/>
                    </div>
                </div>
                <div class="lg:col-span-4">
                    <div class="grid grid-cols-1">
                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-gray-50 dark:bg-slate-800" style="height: 330px;overflow-y: auto;">
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
                    </div>
                </div>
            </div>

        </div><!--end container-->
    </section>

    <section class="relative py-10 bg-gray-50">
        <div class="container">
            <x-captions.recent-captions-component/>
        </div>
    </section>

    <section class="relative py-16">

            <div class="container">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                    <div class="md:col-span-4 order-1 md:order-2">
                        <div class="lg:ml-8">
                            <img src="{{ asset('frontend/assets/images/what-is-instagram-caption-generator.gif') }}" alt="">
                        </div>
                    </div>

                    <div class="md:col-span-8 mt-8 md:mt-0 order2 md:order-1">
                        <div class="lg:ml-5">
                            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">WHAT IS <br>  INSTAGRAM CAPTION GENERATOR ?</h3>

                            <p class="text-slate-400 mb-5 mr-5">Instagram Caption Generator is a tool designed to help users generate captions for their Instagram posts, stories, and images. It uses advanced artificial intelligence systems (AI) to  provide unique and creative captions based on a topic or keyword provided by the user. The purpose of the tool is to make it easier for users to create compelling captions for their Instagram content, without having to spend hours coming up with ideas or struggling to find the right words.</p>
                            <p class="text-slate-400 mb-5 mr-5">By using an Instagram Caption Generator, users can save time and increase the quality of their captions, which can in turn help to engage their followers and drive more traffic to their profiles. Whether you're a personal user or a business looking to promote your brand on Instagram, this tool can be an invaluable resource, making it easier to create captions that truly stand out and help you reach your desired audience.</p>
                            <p class="text-slate-400 mb-5 mr-5">So if you're looking for a fast and effective way to generate high-quality captions for your Instagram content, give the Instagram Caption Generator a try. It's free, easy to use, and can help take your content to the next level.</p>

                        </div>
                    </div>
                </div>


                <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-semibold mt-16 lg:ml-5">FEATURES OF THE INSTAGRAM CAPTION GENERATOR</h3>
                <p class="text-slate-400 lg:ml-5">By utilizing these features, an Instagram Caption Generator can help users create captions that truly stand out and drive engagement, making it an essential tool for any Instagram user.</p>
                <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center mt-10 gap-[30px]">
                    <div class="lg:col-span-6">
                        <div class="grid grid-cols-1">
                            <div class="group flex items-center relative overflow-hidden p-2 mb-2 rounded-md shadow dark:shadow-gray-800 bg-gray-50 dark:bg-slate-800 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out">
                                <span class="text-indigo-600 group-hover:text-white text-5xl font-semibold transition-all duration-500 ease-in-out">
                                    <i class="uil uil-check-circle"></i>
                                </span>
                                <div class="flex-1 ml-3">
                                    <h5 class="group-hover:text-white text-xl font-semibold transition-all duration-500 ease-in-out">AI-powered</h5>
                                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-2">The tool utilizes artificial intelligence systems to generate unique and creative captions for your Instagram content.</p>
                                </div>
                                <div class="absolute left-1 top-5 text-dark/[0.03] dark:text-white/[0.03] text-8xl group-hover:text-white/[0.04] transition-all duration-500 ease-in-out">
                                    <i class="uil uil-check-circle"></i>
                                </div>
                            </div>

                            <div class="group flex items-center relative overflow-hidden p-2 mb-2 rounded-md shadow dark:shadow-gray-800 bg-gray-50 dark:bg-slate-800 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out">
                                <span class="text-indigo-600 group-hover:text-white text-5xl font-semibold transition-all duration-500 ease-in-out">
                                    <i class="uil uil-check-circle"></i>
                                </span>
                                <div class="flex-1 ml-3">
                                    <h5 class="group-hover:text-white text-xl font-semibold transition-all duration-500 ease-in-out">Topic or keyword based</h5>
                                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-2">Simply provide a topic or keyword and the tool will generate a list of captions related to that topic.</p>
                                </div>
                                <div class="absolute left-1 top-5 text-dark/[0.03] dark:text-white/[0.03] text-8xl group-hover:text-white/[0.04] transition-all duration-500 ease-in-out">
                                    <i class="uil uil-check-circle"></i>
                                </div>
                            </div>

                            <div class="group flex items-center relative overflow-hidden p-2 mb-2 rounded-md shadow dark:shadow-gray-800 bg-gray-50 dark:bg-slate-800 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out">
                                <span class="text-indigo-600 group-hover:text-white text-5xl font-semibold transition-all duration-500 ease-in-out">
                                    <i class="uil uil-check-circle"></i>
                                </span>
                                <div class="flex-1 ml-3">
                                    <h5 class="group-hover:text-white text-xl font-semibold transition-all duration-500 ease-in-out">User friendly interface</h5>
                                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-2">The tool is designed to be user-friendly and easy to use, making it accessible to users of all skill levels.</p>
                                </div>
                                <div class="absolute left-1 top-5 text-dark/[0.03] dark:text-white/[0.03] text-8xl group-hover:text-white/[0.04] transition-all duration-500 ease-in-out">
                                    <i class="uil uil-check-circle"></i>
                                </div>
                            </div>

                            <div class="group flex items-center relative overflow-hidden p-2 mb-2 rounded-md shadow dark:shadow-gray-800 bg-gray-50 dark:bg-slate-800 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out">
                                <span class="text-indigo-600 group-hover:text-white text-5xl font-semibold transition-all duration-500 ease-in-out">
                                    <i class="uil uil-check-circle"></i>
                                </span>
                                <div class="flex-1 ml-3">
                                    <h5 class="group-hover:text-white text-xl font-semibold transition-all duration-500 ease-in-out">Customizable</h5>
                                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-2">Users have the ability to edit and modify the generated captions to their liking, allowing for greater creativity and flexibility.</p>
                                </div>
                                <div class="absolute left-1 top-5 text-dark/[0.03] dark:text-white/[0.03] text-8xl group-hover:text-white/[0.04] transition-all duration-500 ease-in-out">
                                    <i class="uil uil-check-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-6 mt-8 md:mt-0">
                        <div class="grid grid-cols-1">
                            <div class="group flex items-center relative overflow-hidden p-2 mb-2 rounded-md shadow dark:shadow-gray-800 bg-gray-50 dark:bg-slate-800 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out">
                                <span class="text-indigo-600 group-hover:text-white text-5xl font-semibold transition-all duration-500 ease-in-out">
                                    <i class="uil uil-check-circle"></i>
                                </span>
                                <div class="flex-1 ml-3">
                                    <h5 class="group-hover:text-white text-xl font-semibold transition-all duration-500 ease-in-out">Free to use</h5>
                                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-2">Many Instagram Caption Generators are available for free, but their Caption quality and user interface are not professional. In this case our Instagram Caption Generator gives you all of access for free. </p>
                                </div>
                                <div class="absolute left-1 top-5 text-dark/[0.03] dark:text-white/[0.03] text-8xl group-hover:text-white/[0.04] transition-all duration-500 ease-in-out">
                                    <i class="uil uil-check-circle"></i>
                                </div>
                            </div>

                            <div class="group flex items-center relative overflow-hidden p-2 mb-2 rounded-md shadow dark:shadow-gray-800 bg-gray-50 dark:bg-slate-800 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out">
                                <span class="text-indigo-600 group-hover:text-white text-5xl font-semibold transition-all duration-500 ease-in-out">
                                    <i class="uil uil-check-circle"></i>
                                </span>
                                <div class="flex-1 ml-3">
                                    <h5 class="group-hover:text-white text-xl font-semibold transition-all duration-500 ease-in-out">Versatile</h5>
                                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-2">The tool can be used for a variety of content types, including posts, stories, and images, making it a valuable resource for any Instagram user.</p>
                                </div>
                                <div class="absolute left-1 top-5 text-dark/[0.03] dark:text-white/[0.03] text-8xl group-hover:text-white/[0.04] transition-all duration-500 ease-in-out">
                                    <i class="uil uil-check-circle"></i>
                                </div>
                            </div>

                            <div class="group flex items-center relative overflow-hidden p-2 mb-2 rounded-md shadow dark:shadow-gray-800 bg-gray-50 dark:bg-slate-800 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out">
                                <span class="text-indigo-600 group-hover:text-white text-5xl font-semibold transition-all duration-500 ease-in-out">
                                    <i class="uil uil-check-circle"></i>
                                </span>
                                <div class="flex-1 ml-3">
                                    <h5 class="group-hover:text-white text-xl font-semibold transition-all duration-500 ease-in-out">Consistency</h5>
                                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-2">The tool can help users maintain a consistent tone and style across their captions, helping to build a cohesive brand image and following.</p>
                                </div>
                                <div class="absolute left-1 top-5 text-dark/[0.03] dark:text-white/[0.03] text-8xl group-hover:text-white/[0.04] transition-all duration-500 ease-in-out">
                                    <i class="uil uil-check-circle"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--end grid-->

                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold mt-16 lg:ml-5 uppercase">How Our Instagram Caption Generator Tools Works ?</h3>
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                    <div class="md:col-span-4 order-1 md:order-2">
                        <div class="lg:ml-8">
                            <img src="{{ asset('frontend/assets/images/how-our-instagram-caption-generator-tools-works.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="md:col-span-8 mt-8 md:mt-0 order2 md:order-1">
                        <div class="lg:ml-5">
                            <p class="text-slate-400 mb-5 mr-5">An Instagram Caption Generator typically works by using artificial intelligence (AI) systems to generate captions based on a topic or keyword provided by the user. Here's a basic overview of how the tool works:</p>
                            <p class="text-slate-400 mb-5 mr-5">Input: The user provides a topic or keyword related to the content they want to post on Instagram.</p>
                            <p class="text-slate-400 mb-5 mr-5">Processing: The tool's AI algorithms analyze the input and generate a list of captions based on that information.</p>
                            <p class="text-slate-400 mb-5 mr-5">Output: The tool presents the user with a list of generated captions, which can then be edited, modified, or used as-is.</p>
                            <p class="text-slate-400 mb-5 mr-5">Some Instagram Caption Generators may also incorporate natural language processing (NLP) technologies to ensure that the captions generated are grammatically correct and use appropriate tone and style for the topic. Additionally, some tools may use machine learning algorithms to learn from user behavior and improve the accuracy and relevance of caption suggestions over time.</p>
                            <p class="text-slate-400 mb-5 mr-5">Using an Instagram Caption Generator is usually straightforward and easy to use. Simply provide the topic or keyword, and the tool will generate a list of captions for you. From there, you can choose the captions that work best for your content, edit or modify them as needed, and then use them in your Instagram posts. With an Instagram Caption Generator, you can save time and effort while still producing high-quality, engaging captions for your content.</p>

                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 pb-8 mt-16">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold text-center uppercase">What's the conclusion</h3>
                    <p class="text-slate-400 mb-5">In conclusion, an Instagram Caption Generator is a valuable tool for any Instagram user who wants to save time and effort while still producing high-quality, engaging captions. With its ability to generate captions based on a keyword or topic, increase creativity, improve engagement, and enhance the user experience, it's no wonder why more and more users are turning to this tool to help take their Instagram content to the next level. .</p>
                    <p class="text-slate-400 mb-5">In summary, the benefits of using an Instagram Caption Generator include:</p>
                    <ul class="list-none text-slate-400 mb-4">
                        <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Saves time</li>
                        <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Increases creativity</li>
                        <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Improves engagement</li>
                        <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Increases brand recognition</li>
                        <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Enhances user experience</li>
                        <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Cost-effective</li>
                        <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Versatile</li>
                    </ul>
                    <p class="text-slate-400 mb-5">If you're an Instagram user who is looking for an easier, more efficient way to create captions, we encourage you to try an Instagram Caption Generator. With its powerful AI systems and user-friendly interface, it's the perfect tool to help you create captions that stand out and drive engagement. So why wait? Give it a try today and see the results for yourself!</p>
                </div>

            </div><!--end container-->

    </section>

    @component('frontend.templates.service-template')@endcomponent

@endsection

@section('script')
    <script>

        var i = 0;
        let txt = 'I love hashtags checker';
        let speed = 50;
        function typeWriter() {
            document.getElementById("q").value = '';
            document.getElementById("noc").value = '';
            i = 0;
            startTyping();
        }
        function startTyping() {
            if (i < txt.length) {
                document.getElementById("q").value += txt.charAt(i);
                i++;
                setTimeout(startTyping, speed);
            }
            else {
                $("#noc").val(5);
                setTimeout(function (){$("#caption-generate-btn").css('margin-left','-10px');}, 100);
                setTimeout(function (){$("#caption-generate-btn").css('margin-left','0');}, 200);
                setTimeout(function (){$("#caption-generate-btn").css('margin-left','-10px');}, 300);
                setTimeout(function (){$("#caption-generate-btn").css('margin-left','0');}, 400);
            }
        }

        function copyAllCaption($this) {
            var $caption = $('#all-caption').attr('value');
            navigator.clipboard.writeText($caption).then(function() {
                $($this).html('<i class="uil uil-check text-{green}"></i> Copied');
                setTimeout(function(){ $($this).html('<i class="uil uil-file-copy-alt"></i> Copy All') }, 2000);
            }, function(err) {
                $($this).html('<i class="uil uil-check text-{red}"></i>');
                setTimeout(function(){ $($this).html('<i class="uil uil-file-copy-alt"></i> Copy All') }, 2000);
            });
        }

        function copyAllDbCaption($this) {
            var $caption = $('#all-db-caption').attr('value');
            navigator.clipboard.writeText($caption).then(function() {
                $($this).html('<i class="uil uil-check text-{green}"></i> Copied');
                setTimeout(function(){ $($this).html('<i class="uil uil-file-copy-alt"></i> Copy All') }, 2000);
            }, function(err) {
                $($this).html('<i class="uil uil-check text-{red}"></i>');
                setTimeout(function(){ $($this).html('<i class="uil uil-file-copy-alt"></i> Copy All') }, 2000);
            });
        }

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
                                $(resultListId).append(`<li><a href="${APP_URL}/caption/${slug}" class="hover:text-indigo-600" target="_blank">${keyword}</a><li>`);
                            });

                        }
                        else if(status === 500)
                            console.error(data);
                    }
                });
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

        function generateCaptionHandler(event){
            event.preventDefault();
            $('#caption-generate-btn').attr('disabled', true).html('<i class="fa-solid fa-spinner fa-spin mr-1"></i> Generating...');
            $('#generated-caption-holder').css('display','block');
            $('#recent-generated-captions').html('<tr><td colspan="4" class="text-center py-5 text-red-600"><i class="fa-solid fa-spinner fa-spin"></i> Generating...</td></tr>');
            const tov = $('#tov').val();
            const language = $('#language').val();
            const keyword = $('#q').val();
            const noc = $('#noc').val();
            if(tov !== '' && language !== ''){
                $.ajax({
                    url: '{{ route('frontend/caption/generate') }}',
                    type:'post',
                    dataType:'json',
                    data:{
                        keyword: keyword,
                        tov: tov,
                        language: language,
                        noc: noc,
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

    </script>
@endsection
