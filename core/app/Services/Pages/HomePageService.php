<?php

namespace App\Services\Pages;

use App\Models\HomePage;
use App\Services\Utility\FileOperationService;

class HomePageService
{
    protected $fileService;
    public function __construct(FileOperationService $fileOperationService)
    {
        $this->fileService = $fileOperationService;
    }

    public function checkSectionExist($sectionName)
    {
        $section = HomePage::query()->where('section_name', $sectionName);
        if ($section->count())
            return $section->first();
        else
            return HomePage::create(['section_name' => $sectionName]);
    }

    public function update($sectionName, $validated)
    {
        switch ($sectionName){
            case 'main-section':
                if(!empty($validated['image']))
                    $validated['image'] = $image = $this->fileService->uploadResized($validated['image'], 'uploads/pages/homepage', 300, 600);
                break;
            case 'about-section':
                if(!empty($validated['image']))
                    $validated['image'] = $image = $this->fileService->uploadResized($validated['image'], 'uploads/pages/homepage', 350, 370);
                break;
            case 'install-section':
                if(!empty($validated['image']))
                    $validated['image'] = $image = $this->fileService->uploadResized($validated['image'], 'uploads/pages/homepage', 400, 500);
                break;
            default:
                if(!empty($validated['image']))
                    $validated['image'] = $image = $this->fileService->upload($validated['image'], 'uploads/pages/homepage/');
        }
        if (!empty($validated['more_button']))
            $validated['more_button'] = json_encode($validated['more_button']);
        else
            $validated['more_button'] = null;

        return HomePage::where('section_name', $sectionName)->update($validated);
    }
}
