<ul class="widget-items">
    @foreach($categories as $category)
    <li><a href="{{ route('frontend/posts/category', ['slug' => $category->slug]) }}" class="d-flex p-3"><span>{{ $category->category_name }}</span><span class="ml-auto">({{ count($category->allPosts) }})</span></a></li>
    @endforeach
</ul>
