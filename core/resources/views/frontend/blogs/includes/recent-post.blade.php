<h5>
    <a role="button" class="collapse show text-uppercase d-block p-3" data-toggle="collapse" href="#recent-posts">Recent post</a>
</h5>
<!-- Post Widget Content -->
<div id="recent-posts" class="accordion-content widget-content collapse show" data-parent="#post-accordion">
    <ul class="widget-items">
        @foreach($recent_posts as $post)
            <li>
                <a href="{{ route('frontend/posts/details', ['slug' => $post->slug]) }}" class="single-post media p-3">
                    <!-- Post Thumb -->
                    <div class="post-thumb avatar-md">
                        <img class="align-self-center" src="{{ asset( $post->feature_image ) }}" alt="{{ $post->title }}">
                    </div>
                    <div class="post-content media-body pl-3">
                        <p class="post-date mb-2">{{ date('d M Y', strtotime($post->created_at)) }}</p>
                        <h6>{{ $post->title }}</h6>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>
