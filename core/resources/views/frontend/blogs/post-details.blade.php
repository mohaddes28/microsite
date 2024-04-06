@extends('frontend.master')

@section('title')
    {{ $post->title }}
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
                            <li class="breadcrumb-item text-uppercase"><a href="{{ route('home') }}">{{ config('app.domain') ?? 'Home' }}</a></li>
                            <li class="breadcrumb-item text-uppercase"><a href="{{ route('frontend/posts') }}">Blogs</a></li>
                            <li class="breadcrumb-item active">{{ $post->title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section id="blog" class="section blog-area ptb_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <!-- Single Blog Details -->
                    <article class="single-blog-details">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="#"><img src="{{ asset($post->feature_image) }}" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content sApp-blog">
                            <!-- Meta Info -->
                            <div class="meta-info d-flex flex-wrap align-items-center py-2">
                                <ul>
                                    <li class="d-inline-block p-2"><a href="#">{{ date('M d, Y', strtotime($post->created_at)) }}</a></li>
                                    <li class="d-inline-block p-2"><a href="#blog-comments-section">{{ count($comments) > 1 ? count($comments).'  Comments' : count($comments).'  Comment'   }}</a></li>
                                </ul>
                                <!-- Blog Share -->
                                <div class="blog-share ml-auto d-none d-sm-block">
                                    <!-- Social Icons -->
                                    <div class="social-icons d-flex justify-content-center">
                                        <a class="bg-white facebook" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a class="bg-white twitter" href="#">
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a class="bg-white google-plus" href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Details -->
                            <div class="blog-details">
                                {!! $post->description !!}
                            </div>
                        </div>
                        <!-- Blog Comments -->
                        @if(count($comments))
                        <div class="blog-comments" id="blog-comments-section">
                            <!-- Comments -->
                            <div class="comments my-3">
                                <!-- Comments Title -->
                                <h3 class="comments-title text-uppercase mb-3 mt-5">Recent Comments</h3>
                                <!-- Single Comments -->
                                @foreach($comments as $comment)
                                <div class="single-comments media p-3 p-lg-4">
                                    <!-- Comments Thumb -->
                                    <div class="comments-thumb avatar avatar-lg">
                                        {{ \App\Http\Helpers\Helpers::getAvatar($comment->name) }}
                                    </div>
                                    <!-- Comments Content -->
                                    <div class="comments-content media-body pl-3">
                                        <h5 class="d-flex mb-2">
                                            <a href="#">{{ $comment->name }}</a>
                                            <a href="#" class="ml-auto"></a>
                                        </h5>
                                        <h6 class="d-flex mb-2">
                                            <a href="mailto:{{ $comment->email }}">{{ $comment->email }}</a>
                                        </h6>
                                        <p class="d-none d-lg-block">{{ $comment->comments }}</p>
                                        <p class="d-block d-lg-none">{{ $comment->comments }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <!-- Blog Contact -->
                        <div class="blog-contact mt-4">
                            <!-- Contact Title -->
                            <h3 class="comments-title text-uppercase mb-3 mt-5">Post your Comments</h3>
                            <p id="msg">

                            </p>
                            <!-- Comment Box -->
                            <div class="contact-box comment-box">
                                <form method="POST" action="{{ route('frontend/posts/details/comment') }}" id="comment-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="Name" required="required" id="name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Email" required="required" id="email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="comments" placeholder="Message" required="required" id="comments"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button id="#btn_submit" class="btn btn-bordered" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </article>
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
                                    @include('frontend.blogs.includes.recent-post')
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->

@endsection

@section('script')
    <script>

        $("#comment-form").submit(function(e){
            e.preventDefault();
            $('#btn_submit').attr('disabled', true);
            $.ajax({
                url: '{{ url('/') }}/blog/comment/store',
                type: 'post',
                dataType: 'json',
                data: {
                    'post_id': '{{ $post->id }}',
                    'name': $('#name').val(),
                    'email': $('#email').val(),
                    'comments': $('#comments').val(),
                    '_token':$('meta[name=csrf-token]').attr("content")
                },
                success: function ({status, data}) {
                    if(status === 200){
                        $('#comment-form')[0].reset();
                        $('#btn_submit').removeAttr('disabled');
                        $('#msg').html(`<span>Your comment has been submitted and is awaiting approval</span>`)
                    }else{
                        $('#btn_submit').removeAttr('disabled');
                        $('#msg').html(`<span>Your comment has not been submitted.</span>`)

                    }
                }
            });
        });

    </script>
@endsection
