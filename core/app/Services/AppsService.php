<?php

namespace App\Services;

use App\Models\Apps;
use App\Services\Utility\FileOperationService;

class AppsService
{
    protected $fileService;
    public function __construct(FileOperationService $fileOperationService)
    {
        $this->fileService = $fileOperationService;
    }

    public function get($id)
    {
        return Apps::findOrFail($id);
    }

    public function store($validated)
    {
        $file = $this->fileService->onlyUpload($validated['file'], 'uploads/apps');
        $validated['file'] = $file;
        $validated['sequence'] = (int) $validated['version'];
        Apps::create($validated);
    }

    public function update($validated, $id)
    {
        $file = $this->get($id);
        if(!empty($validated['image'])){
            $this->fileService->delete($file->file);
            $icon = $this->fileService->onlyUpload($validated['file'], 'uploads/screenshot');
        }else{
            $icon = $file->file;
        }
        $validated['file'] = $icon;
        if(!empty($validated['version']))
            $validated['sequence'] = (int) $validated['version'];
        $feature = Apps::find($id)->update($validated);
    }

    public function destroy($id)
    {
        $file = $this->get($id);
        $this->fileService->delete($file->file);
        Apps::findOrFail($id)->delete();
    }
}
