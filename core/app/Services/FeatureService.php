<?php

namespace App\Services;

use App\Models\Feature;
use App\Services\Utility\FileOperationService;

class FeatureService
{
    private $fileservice;
    public function __construct(FileOperationService $fileOperationService)
    {
        $this->fileservice = $fileOperationService;
    }

    public function get($id)
    {
        return Feature::findOrFail($id);
    }

    public function store($validated) : int
    {
        $icon = $this->fileservice->upload($validated['icon_file'] ,'uploads/feature-icon' );
        $validated['icon'] = $icon;
        $feature = Feature::create($validated);
        return $feature->id;
    }

    public function update($validated, $id)
    {
        $feature = $this->get($id);
        if(!empty($validated['icon_file'])){
            $this->fileservice->delete($feature->icon);
            $icon = $this->fileservice->upload($validated['icon_file'], 'uploads/feature-icon');
        }else{
            $icon = $feature->icon;
        }
        $validated['icon'] = $icon;
        unset($validated['icon_file']);
        $feature = Feature::find($id)->update($validated);
    }

    public function destroy($id)
    {
        $feature = $this->get($id);
        $this->fileservice->delete($feature->icon);
        Feature::findOrFail($id)->delete();
    }
}
