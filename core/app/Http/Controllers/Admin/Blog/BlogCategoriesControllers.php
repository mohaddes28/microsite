<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\CategoryStoreOrUpdateRequest;
use App\Services\Blog\BlogCategoriesService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class BlogCategoriesControllers extends Controller
{
    /**
     * @var BlogCategoriesService
     */
    private $blogCategoriesService;

    public function __construct(BlogCategoriesService $blogCategoriesService)
    {
        $this->middleware('auth');
        $this->blogCategoriesService = $blogCategoriesService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        try {
            $recordPerPage = 100;
            $categories = $this->blogCategoriesService->gets($recordPerPage);
            return view('admin.blog.category.index', [
                'categories'=> $categories,
            ])->with('i', (request()->input('page', '1') - 1) * $recordPerPage);
        }
        catch (\Exception $ex) {
            return view('templates.exception',[
                'exception' => $ex->getMessage().', '.$ex->getFile().': '.$ex->getLine()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.blog.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(CategoryStoreOrUpdateRequest $request): RedirectResponse
    {
        try {
            $this->blogCategoriesService->storeCategory($request->validated());
            return redirect()->route('admin/blog/category/index')->with('success', 'Category has been created.');
        }
        catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage().', '.$ex->getFile().': '.$ex->getLine())->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        try {
            $category = $this->blogCategoriesService->getById($id);
            if(empty($category))
                return view('templates.404');

            return view('admin.blog.category.edit', [
                'category' => $category,
            ]);
        }
        catch (\Exception $ex) {
            return view('templates.exception',[
                'exception' => $ex->getMessage().'<br>'.$ex->getFile().': '.$ex->getLine()
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(CategoryStoreOrUpdateRequest $request, int $id): RedirectResponse
    {
        try {
           $this->blogCategoriesService->update($request->validated(), $id);
            return redirect()->route('admin/blog/category/index')->with('success', 'Category has been updated.');
        }
        catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage().', '.$ex->getFile().': '.$ex->getLine());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->blogCategoriesService->destroy($id);
            return redirect()->back()->with('success', 'Category has been deleted.');
        }
        catch (\Exception $ex) {
            return redirect()->back()->with('error', "{$ex->getMessage()}, {$ex->getFile()}: {$ex->getLine()}");
        }
    }
}
