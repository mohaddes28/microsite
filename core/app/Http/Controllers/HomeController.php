<?php

namespace App\Http\Controllers;

use App\Models\Apps;
use App\Models\Blog\BlogPost;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\HomePage;
use App\Models\NameGeneratorName;
use App\Models\Page;
use App\Models\ScreenShot;
use App\Services\Blog\BlogPostsService;
use App\Services\Seo\SeoManagerService;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private $blogPostsService;
    protected $seoManager;

    public function __construct(BlogPostsService $blogPostsService, SeoManagerService $seoManagerService)
    {
        $this->blogPostsService = $blogPostsService;
        $this->seoManager = $seoManagerService;
    }

    public function index(HomePage $homePage)
    {
        $screenshots = ScreenShot::all();
        $features = Feature::query()->orderBy('id', 'asc')->get();
        $faqs = Faq::all();
        $apps = Apps::query()->latest('id');
        $latestBlogs = BlogPost::query()->latest('id')->limit(3)->get();
        $sectionData =  [
            'main-section' => $homePage->where('section_name', 'main-section')->first(),
            'about-section' => $homePage->where('section_name', 'about-section')->first(),
            'feature-section' => $homePage->where('section_name', 'feature-section')->first(),
            'download-section' => $homePage->where('section_name', 'download-section')->first(),
            'install-section' => $homePage->where('section_name', 'install-section')->first(),
            'working-section' => $homePage->where('section_name', 'working-section')->first(),
            'screenshot-section' => $homePage->where('section_name', 'screenshot-section')->first(),
        ];
        return view('frontend.home', compact('sectionData','screenshots', 'features', 'faqs', 'apps', 'latestBlogs'));
    }

    public function disclaimer()
    {
        $data = Page::query()->where('slug','disclaimer')->first();
        $metaSeo = $this->seoManager->checkRecord('disclaimer');
        return view('frontend.pages.disclaimer', compact('data', 'metaSeo'));
    }

    public function termsConditions()
    {
        $data = Page::query()->where('slug','terms-conditions')->first();
        $metaSeo = $this->seoManager->checkRecord('terms-conditions');
        return view('frontend.pages.terms-and-conditions', compact('data', 'metaSeo'));
    }

    public function privacyPolicy()
    {$data = Page::query()->where('slug','privacy-policy')->first();
        $metaSeo = $this->seoManager->checkRecord('privacy-policy');
        return view('frontend.pages.privacy-policy',  compact('data', 'metaSeo'));
    }
}
