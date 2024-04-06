<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pages\Home\SectionRequest;
use App\Services\Pages\HomePageService;
use App\Services\Utility\FileOperationService;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    protected $fileService;
    protected $service;
    public function __construct(FileOperationService $fileOperationService, HomePageService $homePageService)
    {
        $this->fileService = $fileOperationService;
        $this->service = $homePageService;
    }

    public function index()
    {
        return view('admin.pages.home.index');
    }

    public function mainSection(HomePageService $service)
    {
        $section = $this->service->checkSectionExist('main-section');
        return view('admin.pages.home.main-section', compact('section'));
    }

    public function aboutSection(HomePageService $service)
    {
        $section = $this->service->checkSectionExist('about-section');
        return view('admin.pages.home.about-section', compact('section'));
    }

    public function featureSection(HomePageService $service)
    {
        $section = $this->service->checkSectionExist('feature-section');
        return view('admin.pages.home.feature-section', compact('section'));
    }

    public function downloadSection(HomePageService $service)
    {
        $section = $this->service->checkSectionExist('download-section');
        return view('admin.pages.home.download-section', compact('section'));
    }
    public function installSection(HomePageService $service)
    {
        $section = $this->service->checkSectionExist('install-section');
        return view('admin.pages.home.install-section', compact('section'));
    }

    public function workingSection(HomePageService $service)
    {
        $section = $this->service->checkSectionExist('working-section');
        return view('admin.pages.home.working-section', compact('section'));
    }

    public function screenshotSection(HomePageService $service)
    {
        $section = $this->service->checkSectionExist('screenshot-section');
        return view('admin.pages.home.screenshot-section', compact('section'));
    }
    public function homePageUpdate($sectionName, SectionRequest $request)
    {
        DB::beginTransaction();
        try {
            $validated = $request->validated();
            $this->service->update($sectionName, $validated);
            DB::commit();
            return redirect()->back()->with('success', 'Operation was successful!');
        }catch(\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
}
