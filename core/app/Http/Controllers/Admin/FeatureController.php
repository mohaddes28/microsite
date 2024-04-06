<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureRequest;
use App\Models\Feature;
use App\Services\FeatureService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeatureController extends Controller
{
    protected $service;
    public function __construct(FeatureService $featureService)
    {
        $this->service = $featureService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recordPerPage = 20;
        $features = Feature::query()->paginate($recordPerPage);
        return view('admin.feature.index', compact('features'))->with('i', ((request()->input('page', '1') - 1) * $recordPerPage)+1);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.feature.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeatureRequest $request)
    {
        $validated =  $request->validated();
        DB::beginTransaction();
        try {
            $response = $this->service->store($validated);
            DB::commit();
            return redirect()->route('admin.feature.index')->with('success', 'Feature has been added successfully');
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
        $feature = $this->service->get($id);
        return view('admin.feature.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FeatureRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $validated = $request->validated();
            $this->service->update($validated, $id);
            DB::commit();
            return redirect()->route('admin.feature.index')->with('success', 'Feature has been updated successfully');
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
            return redirect()->route('admin.feature.index')->with('success', 'Feature has been deleted successfully');
        }catch (\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
