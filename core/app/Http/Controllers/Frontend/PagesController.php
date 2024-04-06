<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\SentContactMail;
use App\Models\Apps;
use App\Models\DownloadPage;
use App\Models\Hashtag;
use App\Services\CaptionService;
use App\Services\HashtagService;
use App\Services\OpenAiService;
use App\Services\Pages\ContactMessageService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    protected $contactMessegeService;
    public function __construct(ContactMessageService $contactMessageService)
    {
        $this->contactMessegeService = $contactMessageService;
    }

    public function downloadApp(){
        $latest_app = Apps::select('id', 'version', 'file_size', 'file')->where('latest', 1)->first();
        $old_apps = Apps::select('id', 'version', 'file_size', 'file')->where('latest', 0)->orderBy('sequence', 'desc')->get();
        $sectionData = [
          'main' => DownloadPage::query()->where('section_name', 'main')->first(),
          'installation' => DownloadPage::query()->where('section_name', 'installation')->first(),
          'additional-content' => DownloadPage::query()->where('section_name', 'additional-content')->first(),
        ];
        return view('frontend.download-app', compact('latest_app', 'old_apps', 'sectionData'));
    }

    public function downloadByLink(Request $request)
    {
        if ($request->app_id === 'microG')
            return response()->download('uploads/apps/microG.apk');
        $app = Apps::select('id','file')->where('id', $request->app_id)->first();
        return response()->download($app->file);
    }

    public function about(){
        return view('frontend.pages.about');
    }

    public function Contact(){
        return view('frontend.pages.contact');
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
        return view('frontend.pages.terms-and-conditions');
    }

    public function privacyPolicy(){
        return view('frontend.pages.privacy-policy');
    }

}
