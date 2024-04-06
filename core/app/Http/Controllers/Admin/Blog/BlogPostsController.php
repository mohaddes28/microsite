<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreBlogRequest;
use App\Services\Blog\BlogCategoriesService;
use App\Services\Blog\BlogPostsService;
use App\Services\Utility\FileOperationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class BlogPostsController extends Controller
{
    /**
     * @var BlogPostsService
     */
    private $blogsService;
    /**
     * @var BlogCategoriesService
     */
    private $blogCategoriesService;
    /**
     * @var FileOperationService
     */
    private $fileOperationService;

    /**
     * @param BlogPostsService $blogsService
     * @param BlogCategoriesService $blogCategoriesService
     * @param FileOperationService $fileOperationService
     */
    public function __construct(BlogPostsService $blogsService, BlogCategoriesService $blogCategoriesService, FileOperationService $fileOperationService)
    {
        $this->middleware('auth');
        $this->blogsService = $blogsService;
        $this->blogCategoriesService = $blogCategoriesService;
        $this->fileOperationService = $fileOperationService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        $recordPerPage = 100;
        $hashtags = $this->blogsService->gets($recordPerPage);
        $categories = $this->blogCategoriesService->getsForDdl();
        return view('admin.blog.post.index', [
            'rows' => $hashtags,
            'categories' => $categories
        ])->with('i', ((request()->input('page', '1') - 1) * $recordPerPage)+1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|RedirectResponse
     */
    public function create()
    {
        try {
            $categories = $this->blogCategoriesService->getsForDdl();
            return view('admin.blog.post.create',[
                'categories' => $categories
            ]);
        } catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return
     */
    public function store(StoreBlogRequest $request): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $validated = $request->validated();
            $photo = $this->fileOperationService->upload($validated['photo_file'], 'uploads/blogs');
            $validated['feature_image'] = $photo;
            $indexResponse = $this->blogsService->store($validated);
            DB::commit();
            return redirect()->route('admin/blog/post/index')->with('success_msg', 'Blog has been added successfully');
        } catch(\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return
     */
    public function edit($id)
    {
        try {
            $categories = $this->blogCategoriesService->getsForDdl();
            $blog = $this->blogsService->get($id);
            return view('admin.blog.post.edit',[
                'categories' => $categories,
                'post' => $blog
            ]);
        } catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return
     */
    public function update(StoreBlogRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $blog = $this->blogsService->get($id);

            $validated = $request->validated();
            if(!empty($validated['photo_file'])){
                $this->fileOperationService->delete($blog->feature_image);
                $photo = $this->fileOperationService->upload($validated['photo_file'], 'uploads/blogs');
            }else{
                $photo = $blog->feature_image;
            }

            $validated['feature_image'] = $photo;
            $this->blogsService->update($validated, $id);
            DB::commit();
            return redirect()->route('admin/blog/post/index')->with('success', 'Blog has been updated successfully');
        } catch(\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $blog = $this->blogsService->get($id);
            if(empty($blog))
                return view('templates.404');
            $this->fileOperationService->delete($blog->feature_image);
            $this->blogsService->delete($id);
            DB::commit();
            return redirect()->route('admin/blog/post/index')->with('success', 'Blog has been deleted successfully');
        } catch(\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
