<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Pages\ContactMessageService;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    protected $service;
    public function __construct(ContactMessageService $contactMessageService)
    {
        $this->service = $contactMessageService;
    }

    public function index()
    {
        $recordPerPage = 20;
        $contactMessages = $this->service->gets($recordPerPage);
        return view('admin.contact-message.index' , compact('contactMessages'))->with('i', ((request()->input('page', '1') - 1) * $recordPerPage)+1);
    }
}
