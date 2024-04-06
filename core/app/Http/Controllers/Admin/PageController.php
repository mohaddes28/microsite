<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutUs()
    {
        $seoData = [];
        return view('admin.pages.about-us', compact('seoData'));
    }
    public function disclaimer()
    {

    }
    public function privacyPolicy()
    {

    }
    public function termsConditions()
    {

    }
    public function aboutUsStore()
    {

    }
    public function disclaimerStore()
    {

    }
    public function privacyPolicyStore()
    {

    }
    public function termsConditionsStore()
    {

    }

    public function aboutUsUpdate()
    {

    }
    public function disclaimerUpdate()
    {

    }
    public function privacyPolicyUpdate()
    {

    }
    public function termsConditionsUpdate()
    {

    }

}
