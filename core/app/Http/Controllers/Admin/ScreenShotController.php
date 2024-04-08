<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureRequest;
use App\Http\Requests\ScreenShootRequest;
use App\Models\Feature;
use App\Models\ScreenShot;
use App\Services\FeatureService;
use App\Services\ScreenshotService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScreenShotController extends Controller
{
    protected $service;
    public function __construct(ScreenshotService $screenshotService)
    {
        $this->service = $screenshotService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recordPerPage = 20;
        $screenshots = ScreenShot::query()->paginate($recordPerPage);
        return view('admin.screenshot.index', compact('screenshots'))->with('i', ((request()->input('page', '1') - 1) * $recordPerPage)+1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.screenshot.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScreenShootRequest $request)
    {
        $validated =  $request->validated();
        DB::beginTransaction();
        try {
            $response = $this->service->store($validated);
            DB::commit();
            return redirect()->route('admin.screenshot.index')->with('success', 'Screenshot has been added successfully');
        }catch(\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $screenshot = $this->service->get($id);
        return view('admin.screenshot.edit', compact('screenshot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ScreenShootRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $validated = $request->validated();
            $this->service->update($validated, $id);
            DB::commit();
            return redirect()->route('admin.screenshot.index')->with('success', 'Screenshot has been updated successfully');
        }catch (\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $this->service->destroy($id);
            DB::commit();
            return redirect()->route('admin.screenshot.index')->with('success', 'Screenshot has been deleted successfully');
        }catch (\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
