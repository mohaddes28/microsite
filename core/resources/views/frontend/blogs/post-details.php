

    <!-- Start Section-->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-8 md:col-span-6">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-800">

                        <img src="{{ asset($post->feature_image) }}" class="rounded-md" alt="">

                        <div class="mt-6">
                          {!! $post->description !!}
                        </div>
                    </div>

                    <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                        <h5 class="text-lg font-semibold">Comments:</h5>

                        @foreach($comments as $comment)
                        <div class="mt-8">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <p class="h-11 w-11 rounded-full shadow bg-black text-white ">{{ \App\Http\Helpers\Helpers::getAvatar($comment->name) }}</p>
                                    <div class="ml-3 flex-1">
                                        <a href="#" class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">{{ $comment->name }}</a>
                                        <p class="text-sm text-slate-400">{{ date('d M Y  h:i A', strtotime($comment->created_at)) }}</p>
                                    </div>
                                </div>

                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                <p class="text-slate-400 italic">" {{ $comment->comments }} "</p>
                            </div>
                        </div>
                        @endforeach

                    </div>

                    <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                        <h5 class="text-lg font-semibold">Leave A Comment:</h5>
                        <div id="msg">

                        </div>

                        <form class="mt-8" method="post" id="comment-form" action="{{ route('frontend/posts/details/comment', ['slug' => $post->slug]) }}">
                            @csrf
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-left">
                                        <label for="name" class="font-semibold">Your Name:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="user" class="w-4 h-4 absolute top-3 left-4"></i>
                                            <input name="name" id="name" type="text" class="form-input pl-11" placeholder="Name :" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-left">
                                        <label for="email" class="font-semibold">Your Email:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
                                            <input name="email" id="email" type="email" class="form-input pl-11" placeholder="Email :" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1">
                                <div class="mb-5">
                                    <div class="text-left">
                                        <label for="comments" class="font-semibold">Your Comment:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="message-circle" class="w-4 h-4 absolute top-3 left-4"></i>
                                            <textarea name="comments" id="comments" class="form-input pl-11 h-28" placeholder="Message :" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="btn_submit" name="send" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Comment</button>
                        </form>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div class="sticky top-20">
                        <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">Social sites</h5>
                        <ul class="list-none text-center mt-8">
                            <li class="inline"><a href="#" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="#" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="#" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="#" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="#" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="github" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="#" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="youtube" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="#" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="gitlab" class="h-4 w-4"></i></a></li>
                        </ul><!--end icon-->
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->


    </section><!--end section-->
    <!-- End -->
