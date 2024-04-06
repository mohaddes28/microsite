<?php

namespace App\Services\Pages;

use App\Models\ContactMessage;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ContactMessageService
{
    public function store($validated)
    {
        ContactMessage::create($validated);
    }

    public function gets($recordPerPage) : LengthAwarePaginator
    {
        return ContactMessage::query()->paginate($recordPerPage);
    }
}
