<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use App\Services\FaqService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    protected $service;
    public function __construct(FaqService $faqService)
    {
        $this->service = $faqService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recordPerPage = 20;
        $faqs = Faq::query()->paginate($recordPerPage);
        return view('admin.faq.index', compact('faqs'))->with('i', ((request()->input('page', '1') - 1) * $recordPerPage)+1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqRequest $request)
    {
        $validated =  $request->validated();
        DB::beginTransaction();
        try {
            $this->service->store($validated);
            DB::commit();
            return redirect()->route('admin.faq.index')->with('success', 'Faq has been added successfully');
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
        $faq = $this->service->get($id);
        return view('admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaqRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $validated = $request->validated();
            $this->service->update($validated, $id);
            DB::commit();
            return redirect()->route('admin.faq.index')->with('success', 'Faq has been updated successfully');
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
            return redirect()->route('admin.faq.index')->with('success', 'Faq has been deleted successfully');
        }catch (\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
