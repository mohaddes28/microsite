<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\NewsComment;
use App\Services\Blog\BlogCommentsService;
use App\Services\Blog\BlogPostsService;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
    /**
     * @var BlogPostsService
     */
    private $blogPostsService;
    /**
     * @var BlogCommentsService
     */
    private $blogCommentsService;

    public function __construct(BlogPostsService $blogPostsService, BlogCommentsService $blogCommentsService)
    {
        $this->blogPostsService = $blogPostsService;
        $this->blogCommentsService = $blogCommentsService;
    }

    public function posts(){
        $recordPerPage = 10;
        $posts = $this->blogPostsService->gets($recordPerPage);
        $recent_posts = $this->blogPostsService->getRecentPosts(5);
        $categories = $this->blogPostsService->getCategories();
        return view('frontend.blogs.posts', [
            'rows' => $posts,
            'recent_posts' => $recent_posts,
            'categories' =>$categories,
        ])->with('i', ((request()->input('page', '1') - 1) * $recordPerPage)+1);
    }

    public function postDetails($slug)
    {
        $post = $this->blogPostsService->getBySlug($slug);
        $recent_posts = $this->blogPostsService->getRecentPosts(5);
        $categories = $this->blogPostsService->getCategories();
        $comments = $this->blogCommentsService->getsByPost($post->id);
        return view('frontend.blogs.post-details',[
            'post' => $post,
            'recent_posts' =>$recent_posts,
            'categories' =>$categories,
            'comments' => $comments
        ]);
    }

    public function storeComment(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comments' => 'required'
        ]);
        DB::beginTransaction();
        try {
            $post = $this->blogPostsService->get($request->post_id);

            $this->blogCommentsService->store([
                'name' => $request->name,
                'email' => $request->email,
                'comments' => $request->comments,
                'post_id' => $post->id,
                'approve' => 0
            ]);
            DB::commit();
            return  response()->json([
                'status' => 200
            ]);
        } catch(\Exception $e){
            DB::rollBack();
            return response()->json([
                'status' => 500,
                'data' => $e->getMessage()
            ]);
        }

    }

    public function blogByCaregory($slug)
    {
        $recordPerPage = 10;
        $posts = $this->blogPostsService->postByCategorySlug($slug, $recordPerPage);
        $recent_posts = $this->blogPostsService->getRecentPosts(5);
        $categories = $this->blogPostsService->getCategories();
        return view('frontend.blogs.posts', [
            'rows' => $posts,
            'recent_posts' => $recent_posts,
            'categories' =>$categories,
        ])->with('i', ((request()->input('page', '1') - 1) * $recordPerPage)+1);
    }
}
