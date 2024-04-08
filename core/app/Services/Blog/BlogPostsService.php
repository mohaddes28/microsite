<?php

namespace App\Services\Blog;

use App\Models\Blog\BlogCategory;
use App\Models\Blog\BlogPost;
use App\Services\Seo\SearchConsole;
use App\Services\SlugService;
use http\Env\Response;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class BlogPostsService
{

    /**
     * @var SlugService
     */
    private $slugService;

    private $searchConsole;

    public function __construct(SlugService $slugService, SearchConsole $searchConsole)
    {
        $this->slugService = $slugService;
        $this->searchConsole = $searchConsole;
    }

    /**
     * Get list of hashtags with pagination's
     * @param int $recordPerPage
     * @return LengthAwarePaginator
     */
    public function gets(int $recordPerPage): LengthAwarePaginator
    {
        $cat_id = request()->input('cat_id');
        $title = request()->input('title');

        $query = $this->generateQuery();

        if(!empty($cat_id))
            $query->where('blog_posts.category_id', $cat_id);

        if(!empty($title))
            $query->where('blog_posts.title', 'LIKE', "%$title%");

        return $query
            ->select('blog_posts.id', 'blog_posts.title', 'blog_posts.description', 'blog_posts.slug', 'blog_posts.category_id', 'blog_categories.category_name',
                'blog_posts.feature_image', 'blog_posts.meta_keyword', 'blog_posts.meta_description', 'blog_posts.created_at')
            ->orderByDesc('blog_posts.id')
            ->paginate($recordPerPage)
            ->appends(['cat_id' => $cat_id, 'title' => $title]);
    }

    /**
     * Store hashtag
     * @param array $validated
     * @return int
     */
    public function store(array $validated)
    {
        $validated['slug'] = $this->slugService->createSlug($validated['title'], BlogPost::query());
       $blog = BlogPost::create($validated);
       $indexResponse = $this->searchConsole->runIndexing($blog);
       throw_if($indexResponse['google'] == 400, \Exception::class, 'This post was unable to index on google');
    }

    public function get($id)
    {
        return $this->generateQuery()
            ->select('blog_posts.id', 'blog_posts.title', 'blog_posts.description', 'blog_posts.slug', 'blog_posts.category_id', 'blog_categories.category_name',
                'blog_posts.feature_image', 'blog_posts.meta_keyword', 'blog_posts.meta_description')
            ->where('blog_posts.id', $id)->first();
    }


    public function update(array $validated, $id)
    {
        unset($validated['photo_file']);

        BlogPost::where('id', $id)->update($validated);
    }

    public function delete($id)
    {
        BlogPost::where('id', $id)->delete();
    }

    private function generateQuery(): Builder
    {
        return DB::table('blog_posts')
            ->join('blog_categories', 'blog_posts.category_id', '=', 'blog_categories.id');
    }

    public function getRecentPosts(int $take): Collection
    {
        return $this->generateQuery()
            ->orderByDesc('blog_posts.id')
            ->select('blog_posts.id', 'blog_posts.slug', 'blog_posts.title', 'blog_posts.description' , 'blog_posts.created_at', 'blog_posts.feature_image')
            ->take($take)
            ->get();
    }

    public function getBySlug($slug)
    {
        return $this->generateQuery()
            ->select('blog_posts.id', 'blog_posts.title', 'blog_posts.description', 'blog_posts.slug', 'blog_posts.category_id', 'blog_categories.category_name',
                'blog_posts.feature_image', 'blog_posts.meta_keyword', 'blog_posts.meta_description', 'blog_posts.created_at', 'blog_posts.updated_at')
            ->where('blog_posts.slug', $slug)->first();
    }

    public function getCategories()
    {
        return BlogCategory::all();
    }

    public function postByCategorySlug($slug, $recordPerPage): object
    {
        $cat_id = request()->input('cat_id');
        $title = request()->input('title');

        $query = $this->generateQuery();

        if(!empty($cat_id))
            $query->where('blog_posts.category_id', $cat_id);

        if(!empty($title))
            $query->where('blog_posts.title', 'LIKE', "%$title%");

        return $query
            ->select('blog_posts.id', 'blog_posts.title', 'blog_posts.description', 'blog_posts.slug', 'blog_posts.category_id', 'blog_categories.category_name',
                'blog_posts.feature_image', 'blog_posts.meta_keyword', 'blog_posts.meta_description', 'blog_posts.created_at')
            ->where('blog_categories.slug', $slug)
            ->orderByDesc('blog_posts.id')
            ->paginate($recordPerPage)
            ->appends(['cat_id' => $cat_id, 'title' => $title]);
    }

}
