<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppsRequest;
use App\Models\Apps;
use App\Services\AppsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppsController extends Controller
{
    protected $service;
    public function __construct(AppsService $appsService)
    {
        $this->service = $appsService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recordPerPage = 20;
        $apps = Apps::query()->paginate($recordPerPage);
        return view('admin.apps.index', compact('apps'))->with('i', ((request()->input('page', '1') - 1) * $recordPerPage)+1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.apps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AppsRequest $request)
    {
        $validated =  $request->validated();
        DB::beginTransaction();
        try {
            $this->service->store($validated);
            DB::commit();
            return redirect()->route('admin.apps.index')->with('success', 'Apps has been added successfully');
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
        $app = $this->service->get($id);
        return view('admin.apps.edit', compact('app'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AppsRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $validated = $request->validated();
            $this->service->update($validated, $id);
            DB::commit();
            return redirect()->route('admin.apps.index')->with('success', 'Apps has been updated successfully');
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
            return redirect()->route('admin.apps.index')->with('success', 'Apps has been deleted successfully');
        }catch (\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
