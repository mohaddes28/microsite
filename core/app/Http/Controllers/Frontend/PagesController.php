<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\SentContactMail;
use App\Models\Apps;
use App\Models\DownloadPage;
use App\Models\Hashtag;
use App\Models\Page;
use App\Services\CaptionService;
use App\Services\HashtagService;
use App\Services\OpenAiService;
use App\Services\Pages\ContactMessageService;
use App\Services\Seo\SeoManagerService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    protected $contactMessegeService;
    protected $seoManager;
    public function __construct(ContactMessageService $contactMessageService, SeoManagerService $seoManagerService)
    {
        $this->contactMessegeService = $contactMessageService;
        $this->seoManager = $seoManagerService;
    }

    public function downloadApp(){
        $latest_app = Apps::select('id', 'version', 'file_size', 'file')->where('latest', 1)->first();
        $old_apps = Apps::select('id', 'version', 'file_size', 'file')->where('latest', 0)->orderBy('sequence', 'desc')->get();
        $sectionData = [
          'main' => DownloadPage::query()->where('section_name', 'main')->first(),
          'installation' => DownloadPage::query()->where('section_name', 'installation')->first(),
          'additional-content' => DownloadPage::query()->where('section_name', 'additional-content')->first(),
        ];
        $metaSeo = $this->seoManager->checkRecord('download-section');
        return view('frontend.download-app', compact('latest_app', 'old_apps', 'sectionData', 'metaSeo'));
    }

    public function downloadByLink(Request $request)
    {
        if ($request->app_id === 'microG') {
            $filePath = 'uploads/apps/microG.apk';
        }else{
            $app = Apps::where('id', $request->app_id)->first();
            $filePath = $app->file;
        }
        $fileName = basename($filePath);
        $headers = [
            'Content-Type' => 'application/vnd.android.package-archive',
            'Content-Disposition' => 'attachment; filename="'.$fileName.'"',
        ];
        return response()->download($filePath, ucfirst($fileName), $headers);
    }

    public function about(){
        $data = Page::query()->where('slug','about-us')->first();
        $metaSeo = $this->seoManager->checkRecord('about-us');
        return view('frontend.pages.about', compact('data', 'metaSeo'));
    }

    public function Contact(){
        $metaSeo = $this->seoManager->checkRecord('contact');
        return view('frontend.pages.contact', compact('metaSeo'));
    }

    public function contactStore(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'comments' => 'required',
//            'g-recaptcha-response' => 'required|captcha'
        ]);
        DB::beginTransaction();
        try {
            $this->contactMessegeService->store($validated);
            DB::commit();
            return redirect()->back()->with('success','Message has been sent.');
        }catch (\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function termsAndConditions(){
        $data = Page::query()->where('slug','about-us')->first();
        $metaSeo = $this->seoManager->checkRecord('about-us');
        return view('frontend.pages.terms-and-conditions', compact('data', 'metaSeo'));
    }

    public function privacyPolicy(){
        $data = Page::query()->where('slug','about-us')->first();
        $metaSeo = $this->seoManager->checkRecord('about-us');
        return view('frontend.pages.privacy-policy', compact('data', 'metaSeo'));
    }

}
