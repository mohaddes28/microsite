<?php

namespace App\Services;

use App\Models\Feature;
use App\Models\ScreenShot;
use App\Services\Utility\FileOperationService;

class ScreenshotService
{
    protected $fileService;
    public function __construct(FileOperationService $fileOperationService)
    {
        $this->fileService = $fileOperationService;
    }

    public function get($id)
    {
        return ScreenShot::findOrFail($id);
    }

    public function store($validated)
    {
        $validated['image'] = $this->fileService->upload($validated['image'], 'uploads/screenshots');
        ScreenShot::create($validated);
    }

    public function update($validated, $id)
    {
        $screenshot = $this->get($id);
        if(!empty($validated['image'])){
            $this->fileService->delete($screenshot->image);
            $icon = $this->fileService->upload($validated['image'], 'uploads/screenshot');
        }else{
            $icon = $screenshot->image;
        }
        $validated['image'] = $icon;
        $feature = ScreenShot::find($id)->update($validated);
    }

    public function destroy($id)
    {
        $screenshot = $this->get($id);
        $this->fileService->delete($screenshot->image);
        ScreenShot::findOrFail($id)->delete();
    }
}
