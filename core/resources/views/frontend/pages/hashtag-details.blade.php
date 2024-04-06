@extends('layouts.master')

@section('title')
    #{{ $hashtag->hashtag }}
@endsection

@section('body')

    <section class="relative py-8 items-center mt-28 bg-gray-50">
        <div class="container">
            <div class="grid grid-cols-1 justify-center mb-8">
                <h1 class="font-bold lg:leading-normal leading-normal text-2xl mb-5 text-center"><span style="text-transform: uppercase">{{ $hashtag->title }}</span></h1>
                <p class="text-lg mx-auto text-justify">
                    {{ $hashtag->description }}
                </p>
            </div>
        </div><!--end container-->
    </section><!--end section-->

    <section class="relative py-8 items-center">
        <div class="container">
            <div class="grid grid-cols-1 text-center md:px-3">
                <div class="" style="background: #DAE8EE;border-left: solid 15px #99A3A7;color: #445258;font-weight: 300;font-size: 25px;text-align: left;padding: 30px 15px;font-family: Poppins;line-height: 30px;">
                    <img style="float:left;" src="{{ asset('frontend/assets/images/icons/authenticate.png') }}" alt="">
                    <span style="margin-top: 25px;display: inline-block;">
                        100% authentic and real time hashtags data with our hashtag checker
                        <br>
                        All data is collected from official websites
                    </span>

                    <ul class="list-none text-center mt-8 bg-white py-2">
                        <li class="inline" style="font-size: 14px;color: #505050;">Share this page with your friends: </li>
                        <li class="inline"><a href="https://www.instagram.com/?url={{ url()->full() }}" target="_blank" rel="noopener" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                        <li class="inline"><a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}" target="_blank" rel="noopener" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                        <li class="inline"><a href="https://twitter.com/intent/tweet?url={{ url()->full() }}" target="_blank" rel="noopener" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
                    </ul>

                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->

    <section class="relative lg:pb-24 pb-16">
        <div class="container lg:mt-10 mt-10">
            <div class="md:flex">
                <div class="lg:w-3/4 md:w-2/3 md:px-3 mt-[30px] md:mt-0">

                    <h3 class="mb-1 md:text-2xl text-2xl md:leading-normal leading-normal font-semibold">Best --Keyword-- Hashtags <button style="font-size: 14px;border: solid 1px blue;background: #6464fb;color:#fff;padding: 0px 6px;border-radius: 4px;margin-top: 10px;float: right;" type="button" onclick="copySection(this, 'best-hashtag')"><i class="uil uil-file-copy-alt"></i> Copy</button></h3>
                    <p>Best --Keyword-- hashtags on Instagram, Twitter, Facebook, TikTok</p>
                    <div class="rounded-md shadow dark:shadow-gray-800 p-3" id="best-hashtag">
                        #{{ implode(' #', $hashtag->best_hashtags) }}
                    </div>

                    <h3 class="mb-1 mt-10 md:text-2xl text-2xl md:leading-normal leading-normal font-semibold">Best --Keyword-- hashtags for Instagram <button style="font-size: 14px;border: solid 1px blue;background: #6464fb;color:#fff;padding: 0px 6px;border-radius: 4px;margin-top: 10px;float: right;" type="button" onclick="copySection(this, 'similar-hashtag')"><i class="uil uil-file-copy-alt"></i> Copy</button></h3>
                    <p>Grow your instagram using the most tranding --Keyword-- hashtags</p>
                    <div class="rounded-md shadow dark:shadow-gray-800 p-3" id="similar-hashtag">
                        #{{ implode(' #', $hashtag->similar_hashtags) }}
                    </div>

                    <h3 class="mb-1 mt-10 md:text-2xl text-2xl md:leading-normal leading-normal font-semibold">Low difficulty --keyword-- hashtags for Instagram<button style="font-size: 14px;border: solid 1px blue;background: #6464fb;color:#fff;padding: 0px 6px;border-radius: 4px;margin-top: 10px;float: right;" type="button" onclick="copySection(this, 'pop-hashtag')"><i class="uil uil-file-copy-alt"></i> Copy</button></h3>
                    <div class="rounded-md shadow dark:shadow-gray-800">
                        <div id="pop-hashtag" style="display: none;">
                            <?php $count = 0; ?>
                            @foreach($hashtag->popular_hashtags as $pop)
                                    <?php if($count == 30) break; ?>
                                {{ $pop->tag }}
                                    <?php $count++; ?>
                            @endforeach
                        </div>
                        <table class="w-full text-left text-slate-500 dark:text-slate-400">
                            <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                            <tr class="text-center">
                                <th class="px-2 py-1">SL</th>
                                <th class="text-left">Hashtag</th>
                                <th>Total Posts</th>
                            </tr>
                            </thead>
                            <tbody style="font-size: 14px;">
                            <?php $count = 0; ?>
                            @foreach($hashtag->popular_hashtags as $k => $popular)
                                    <?php if($count == 30) break; ?>
                                <tr class="bg-white dark:bg-slate-900 text-center">
                                    <td>{{ ++$k }}</td>
                                    <td class="text-left">{{ $popular->tag }}</td>
                                    <td>{{ \App\Helpers\NumberToWord::convertBigWord($popular->total) }}</td>
                                </tr>
                                    <?php $count++; ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h3 class="mb-1 mt-10 md:text-2xl text-2xl md:leading-normal leading-normal font-semibold">Top 10 --keyword-- Hashtags <button style="font-size: 14px;border: solid 1px blue;background: #6464fb;color:#fff;padding: 0px 6px;border-radius: 4px;margin-top: 10px;float: right;" type="button" onclick="copySection(this, 'related-hashtag')"><i class="uil uil-file-copy-alt"></i> Copy</button></h3>
                    <div class="rounded-md shadow dark:shadow-gray-800 p-3">
                        <div id="related-hashtag" style="display: none;">
                            <?php $count = 0; ?>
                            @foreach($hashtag->related_hashtags as $rel)
                                <?php if($count == 30) break; ?>
                                {{ $rel->hashtag }}
                                <?php $count++; ?>
                            @endforeach
                        </div>

                        <?php $count = 0; ?>
                        @foreach($hashtag->related_hashtags as $ir => $related)
                            <?php if($count == 30) break; ?>
                            <div class="mb-4">
                                <div class="flex justify-between mb-2">
                                    <span class="text-slate-400">#{{ $related->hashtag }}</span>
                                    <span class="text-slate-400">{{ $related->relevance }}%</span>
                                </div>
                                <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                    <div class="bg-indigo-600 h-[6px] rounded-full" style="width: {{ $related->relevance }}%"></div>
                                </div>
                            </div>
                            <?php $count++; ?>
                        @endforeach
                    </div>

                    <h3 class="mb-1 mt-10 md:text-2xl text-2xl md:leading-normal leading-normal font-semibold">Related hashtags for --keyword-- <button style="font-size: 14px;border: solid 1px blue;background: #6464fb;color:#fff;padding: 0px 6px;border-radius: 4px;margin-top: 10px;float: right;" type="button" onclick="copySection(this, 'pop-hashtag')"><i class="uil uil-file-copy-alt"></i> Copy</button></h3>
                    <p>Use this list to find new related hashtags for your posts</p>
                    <div class="rounded-md shadow dark:shadow-gray-800">
                        <div id="pop-hashtag" style="display: none;">
                            <?php $count = 0; ?>
                            @foreach($hashtag->popular_hashtags as $pop)
                                    <?php if($count == 30) break; ?>
                                {{ $pop->tag }}
                                    <?php $count++; ?>
                            @endforeach
                        </div>
                        <table class="w-full text-left text-slate-500 dark:text-slate-400">
                            <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                            <tr class="text-center">
                                <th class="px-2 py-1">SL</th>
                                <th class="text-left">Hashtag</th>
                                <th>Total Posts</th>
                            </tr>
                            </thead>
                            <tbody style="font-size: 14px;">
                            <?php $count = 0; ?>
                            @foreach($hashtag->popular_hashtags as $k => $popular)
                                    <?php if($count == 30) break; ?>
                                <tr class="bg-white dark:bg-slate-900 text-center">
                                    <td>{{ ++$k }}</td>
                                    <td class="text-left">{{ $popular->tag }}</td>
                                    <td>{{ \App\Helpers\NumberToWord::convertBigWord($popular->total) }}</td>
                                </tr>
                                    <?php $count++; ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h3 class="mb-1 mt-10 md:text-2xl text-2xl md:leading-normal leading-normal font-semibold">Exact match hashtags for --keyword-- <button style="font-size: 14px;border: solid 1px blue;background: #6464fb;color:#fff;padding: 0px 6px;border-radius: 4px;margin-top: 10px;float: right;" type="button" onclick="copySection(this, 'pop-hashtag')"><i class="uil uil-file-copy-alt"></i> Copy</button></h3>
                    <p>Use the exact matched --keyword-- hashtags for your posts</p>
                    <div class="rounded-md shadow dark:shadow-gray-800">
                        <div id="pop-hashtag" style="display: none;">
                            <?php $count = 0; ?>
                            @foreach($hashtag->popular_hashtags as $pop)
                                    <?php if($count == 30) break; ?>
                                {{ $pop->tag }}
                                    <?php $count++; ?>
                            @endforeach
                        </div>
                        <table class="w-full text-left text-slate-500 dark:text-slate-400">
                            <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                            <tr class="text-center">
                                <th class="px-2 py-1">SL</th>
                                <th class="text-left">Hashtag</th>
                                <th>Total Posts</th>
                            </tr>
                            </thead>
                            <tbody style="font-size: 14px;">
                            <?php $count = 0; ?>
                            @foreach($hashtag->popular_hashtags as $k => $popular)
                                    <?php if($count == 30) break; ?>
                                <tr class="bg-white dark:bg-slate-900 text-center">
                                    <td>{{ ++$k }}</td>
                                    <td class="text-left">{{ $popular->tag }}</td>
                                    <td>{{ \App\Helpers\NumberToWord::convertBigWord($popular->total) }}</td>
                                </tr>
                                    <?php $count++; ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h3 class="mb-1 mt-10 md:text-2xl text-2xl md:leading-normal leading-normal font-semibold">20 Most Popular Instagram Hashtags <button style="font-size: 14px;border: solid 1px blue;background: #6464fb;color:#fff;padding: 0px 6px;border-radius: 4px;margin-top: 10px;float: right;" type="button" onclick="copySection(this, 'pop-hashtag')"><i class="uil uil-file-copy-alt"></i> Copy</button></h3>
                    <div class="rounded-md shadow dark:shadow-gray-800">
                        <div id="pop-hashtag" style="display: none;">
                            <?php $count = 0; ?>
                            @foreach($hashtag->popular_hashtags as $pop)
                                <?php if($count == 30) break; ?>
                                {{ $pop->tag }}
                                <?php $count++; ?>
                            @endforeach
                        </div>
                        <table class="w-full text-left text-slate-500 dark:text-slate-400">
                            <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                            <tr class="text-center">
                                <th class="px-2 py-1">SL</th>
                                <th class="text-left">Hashtag</th>
                                <th>Total Posts</th>
                            </tr>
                            </thead>
                            <tbody style="font-size: 14px;">
                            <?php $count = 0; ?>
                            @foreach($hashtag->popular_hashtags as $k => $popular)
                                <?php if($count == 30) break; ?>
                                <tr class="bg-white dark:bg-slate-900 text-center">
                                    <td>{{ ++$k }}</td>
                                    <td class="text-left">{{ $popular->tag }}</td>
                                    <td>{{ \App\Helpers\NumberToWord::convertBigWord($popular->total) }}</td>
                                </tr>
                                <?php $count++; ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h3 class="mb-1 mt-10 md:text-2xl text-2xl md:leading-normal leading-normal font-semibold">Newly discovered hashtags for Instagram</h3>


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

                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-3 dark:bg-slate-800">
                            <x-hashtags.most-recent type="list" take="30"/>
                        </div>

                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-3 bg-gray-50 dark:bg-slate-800">
                            <h4 class="mb-4 md:leading-normal leading-normal font-bold text-lg text-slate-700"><i class="uil uil-instagram-alt" style="background: #e8e4fb;color: #6D28D9;padding: 1px 3px;border-radius: 4px;font-size: 14px;"></i> Hashtag Generator</h4>
                            <p class="mb-5 text-slate-400" style="line-height: 20px;">Grab attention with catchy hashtags for your instagram posts</p>
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

    <section class="relative py-36 items-center bg-gray-50">
        <div class="container">
            <div class="grid grid-cols-1 justify-center text-center">
                <div class="">
                    <h1 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">HASHTAG GENERATOR</h1>
                    <p class="text-lg max-w-xl mx-auto">Generate your favourite hashtags for your business using our powerfull hashtag generator. Grow your business.</p>

                    <div class="subcribe-form mt-6 mb-3">
                        <form class="relative max-w-xl mx-auto hashtag-generator-form" action="{{ route('frontend/hashtagGenerator/store') }}" method="post">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="g" value="1">
                            <input type="text" id="hashtag" required name="hashtag" autocomplete="off" class="pt-4 pr-40 pb-4 pl-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white/60 dark:bg-slate-900/60 shadow dark:shadow-gray-800" placeholder="# Type your hashtag">
                            <button type="submit" class="btn absolute top-[2px] right-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full">Generate</button>
                        </form><!--end form-->
                    </div>

                    <span class="font-medium">Looking for others help? <a href="{{ route('frontend/contact') }}" class="text-indigo-600">Get in touch with us</a></span>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->

@endsection
@section('script')
    <script>
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
