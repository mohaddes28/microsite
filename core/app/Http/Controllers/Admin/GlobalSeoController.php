<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GlobalSeoRequest;
use App\Services\Seo\SeoManagerService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use PHPUnit\Exception;

class GlobalSeoController extends Controller
{
    protected $seoManager;

    /**
     * @param SeoManagerService $seoManagerService
     */
    public function __construct(SeoManagerService $seoManagerService)
    {
        $this->seoManager = $seoManagerService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        DB::beginTransaction();
        try {
            $seoData = $this->seoManager->checkRecord();
            DB::commit();
            return view('admin.seo.index', compact('seoData'));
        }catch (\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create():RedirectResponse
    {
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request):RedirectResponse
    {
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id):RedirectResponse
    {
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id):RedirectResponse
    {
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GlobalSeoRequest $request, $id): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $validated = $request->validated();
            $this->seoManager->update($validated, $id);
            DB::commit();
            return redirect()->back()->with('success', 'Operation completed!');
        }catch (Exception $exception){
            DB::rollBack();
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id):RedirectResponse
    {
        return redirect()->back();
    }
}
