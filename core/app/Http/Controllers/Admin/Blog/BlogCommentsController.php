<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Services\Blog\BlogCommentsService;
use Illuminate\Http\RedirectResponse;

class BlogCommentsController extends Controller
{
    /**
     * @var BlogCommentsService
     */
    private $blogCommentsService;

    public function __construct(BlogCommentsService $blogCommentsService)
    {
        $this->middleware('auth');
        $this->blogCommentsService = $blogCommentsService;
    }

    public function index()
    {
        try {
            $recordPerPage = 100;

            $comments = $this->blogCommentsService->gets($recordPerPage);

            return view('admin.blog.comments.index', [
                'comments'=> $comments,
            ])->with('i', (request()->input('page', '1') - 1) * $recordPerPage);
        }
        catch (\Exception $ex) {
            return view('templates.exception',[
                'exception' => $ex->getMessage().', '.$ex->getFile().': '.$ex->getLine()
            ]);
        }
    }

    public function toggleApprove($id): RedirectResponse
    {
        try {
            $this->blogCommentsService->approveToggle($id);
            return redirect()->route('admin/blog/comments/index')->with('success', 'Comment approval status has been changed');
        }
        catch (\Exception $ex) {
            return redirect()->back()->with('error_msg', "{$ex->getMessage()}, {$ex->getFile()}: {$ex->getLine()}");
        }
    }

    public function  destroy($id): RedirectResponse
    {
        try {
            $this->blogCommentsService->delete($id);

            return redirect()->route('admin/blog/comments/index')->with('success', 'Comment has been deleted.');
        }
        catch (\Exception $ex) {
            return redirect()->back()->with('error_msg', "{$ex->getMessage()}, {$ex->getFile()}: {$ex->getLine()}");
        }
    }
}
