<?php

namespace App\Services\Blog;

use App\Models\Blog\BlogComment;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class BlogCommentsService
{
    public function gets($recordPerPage): LengthAwarePaginator
    {
        $query = DB::table('blog_comments')
            ->join('blog_posts', 'blog_posts.id', '=', 'blog_comments.post_id')
            ->select('blog_comments.*', 'blog_posts.title');
        return $query->orderByDesc('blog_comments.id')->paginate($recordPerPage);
    }

    public function approveToggle($id)
    {
        $approve = DB::table('blog_comments')->where('id', $id)->first()->approve;

        BlogComment::where('id', $id)->update([
            'approve' => $approve == 1 ? 0 : 1
        ]);
    }

    public function delete($id)
    {
        BlogComment::where('id', $id)->delete();
    }

    public function store(array $data)
    {
        BlogComment::create($data);
    }

    public function getsByPost($id): Collection
    {
        return DB::table('blog_comments')
            ->select('blog_comments.*')
            ->where('blog_comments.post_id', $id)
            ->where('blog_comments.approve', 1)
            ->get();
    }
}
