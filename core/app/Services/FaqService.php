<?php

namespace App\Services;

use App\Models\Faq;
use App\Services\Utility\FileOperationService;

class FaqService
{
    public function get($id)
    {
        return Faq::findOrFail($id);
    }

    public function store($validated)
    {
        Faq::create($validated);
    }

    public function update($validated, $id)
    {
        $feature = Faq::find($id)->update($validated);
    }

    public function destroy($id)
    {
        Faq::findOrFail($id)->delete();
    }
}
