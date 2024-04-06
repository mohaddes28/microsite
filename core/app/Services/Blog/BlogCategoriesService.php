<?php

namespace App\Services\Blog;

use App\Models\Blog\BlogCategory;
use App\Services\SlugService;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class BlogCategoriesService
{
    /**
     * @var SlugService
     */
    private $slugService;

    public function __construct(SlugService $slugService)
    {
        $this->slugService = $slugService;
    }
    public function gets(int $recordPerPage): LengthAwarePaginator
    {
        $query = DB::table('blog_categories');
        return $query->paginate($recordPerPage);

    }

    public function storeCategory($validated): int
    {
        $category = BlogCategory::create([
            'category_name' => $validated['category_name'],
            'slug'=> $this->slugService->createSlug($validated['category_name'], BlogCategory::query())
        ]);
        return $category->id;
    }

    public function getById($id)
    {
        return DB::table('blog_categories')
            ->where('blog_categories.id', $id)
            ->select('id', 'category_name', 'slug')
            ->first();
    }

    public function update(array $validated, $id) : void
    {
        BlogCategory::where('id', $id)->update([
            'category_name' => $validated['category_name'],
            'slug'=> $this->slugService->createSlug($validated['category_name'], Category::query())
        ]);
    }

    /**
     * Gets categories for dropdown list
     * @return Collection
     */
    public function getsForDdl(): Collection
    {
        return DB::table('blog_categories')->select('id', 'category_name')->orderBy('category_name')->get();
    }

    public function destroy(int $id)
    {
        BlogCategory::where('id', $id)->delete();
    }
}
