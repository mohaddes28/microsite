<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Pages\AllPageSepvice;
use App\Services\Seo\SeoManagerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    protected $seoManager;
    protected $pageManager;
    public function __construct(SeoManagerService $seoManagerService, AllPageSepvice $allPageSepvice)
    {
        $this->seoManager = $seoManagerService;
        $this->pageManager = $allPageSepvice;
    }

    public function aboutUs()
    {
        $seoData = [];
        return view('admin.pages.about-us.index', compact('seoData'));
    }
    public function aboutUsMainSection()
    {
        $section = $this->pageManager->checkRecord('about-us');
        return view('admin.pages.about-us.main-section', compact('section'));
    }
    public function aboutUsSeo()
    {
        $seoData = $this->seoManager->checkRecord('about-us');
        return view('admin.pages.about-us.seo', compact('seoData'));
    }
    public function disclaimer()
    {
        $section = $this->pageManager->checkRecord('disclaimer');
        return view('admin.pages.disclaimer.main-section', compact('section'));
    }
    public function privacyPolicy()
    {
        $section = $this->pageManager->checkRecord('privacy-policy');
        return view('admin.pages.privacy-policy.main-section', compact('section'));
    }
    public function termsConditions()
    {
        $section = $this->pageManager->checkRecord('terms-conditions');
        return view('admin.pages.terms-conditions.main-section', compact('section'));
    }

    public function disclaimerSeo()
    {

        $seoData = $this->seoManager->checkRecord('disclaimer');
        return view('admin.pages.disclaimer.seo', compact('seoData'));

//        $section = $this->pageManager->checkRecord('disclaimer');
//        return view('admin.pages.disclaimer.main-section', compact('section'));
    }
    public function privacyPolicySeo()
    {

        $seoData = $this->seoManager->checkRecord('privacy-policy');
        return view('admin.pages.privacy-policy.seo', compact('seoData'));

//        $section = $this->pageManager->checkRecord('privacy-policy');
//        return view('admin.pages.privacy-policy.main-section', compact('section'));
    }
    public function termsConditionsSeo()
    {

        $seoData = $this->seoManager->checkRecord('terms-conditions');
        return view('admin.pages.terms-conditions.seo', compact('seoData'));

//        $section = $this->pageManager->checkRecord('terms-conditions');
//        return view('admin.pages.terms-conditions.main-section', compact('section'));
    }

    public function update($slug, Request $request)
    {
        DB::beginTransaction();
        try {
            $this->pageManager->update($slug, $request);
            DB::commit();
            return redirect()->back()->with('success', 'Data Updated Successfully!');
        }catch (\Exception $exception){
            DB::rollBack();
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

}
