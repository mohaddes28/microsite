<?php

namespace App\Http\Controllers;

use App\Models\Apps;
use App\Models\Blog\BlogPost;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\HomePage;
use App\Models\NameGeneratorName;
use App\Models\ScreenShot;
use App\Services\Blog\BlogPostsService;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private $blogPostsService;

    public function __construct(BlogPostsService $blogPostsService)
    {
        $this->blogPostsService = $blogPostsService;
    }

    public function index(HomePage $homePage)
    {
        $screenshots = ScreenShot::all();
        $features = Feature::all();
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
        return view('frontend.pages.disclaimer');
    }

    public function termsConditions()
    {
        return view('frontend.pages.terms-and-conditions');
    }

    public function privacyPolicy()
    {
        $metaSeo['title'] = 'no title';
//        $metaSeo['description'] = 'this is description';
        return view('frontend.pages.privacy-policy', compact('metaSeo'));
    }
}
