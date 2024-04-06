<?php

namespace App\Services\Pages;

use App\Models\DownloadPage;

class DownloadPageService
{
    public function checkSectionExist($sectionName)
    {
        $section = DownloadPage::query()->where('section_name', $sectionName);
        if ($section->count())
            return $section->first();
        else
            return DownloadPage::create(['section_name' => $sectionName]);
    }

    public function update($sectionName, $validated)
    {
        $query = DownloadPage::query()->where('section_name', $sectionName);
        if ($query->count()) {
            $query->update($validated);
        } else {
            $validated['section_name'] = $sectionName;
            DownloadPage::create($validated);
        }
    }
}
