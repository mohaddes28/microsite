<?php

namespace App\Services\Seo;

use App\Models\GlobalSeo;
use App\Services\Utility\FileOperationService;

class SeoManagerService
{
    protected $fileSystem;
    public function __construct(FileOperationService $fileOperationService)
    {
        $this->fileSystem = $fileOperationService;
    }

    public function checkRecord($key = 'global')
    {
        $globalSeo = GlobalSeo::query();
        if ($globalSeo->where('key', $key)->count()) {
            return $globalSeo->first();
        }else{
            $data = [
                'key' => $key,
            ];
            return GlobalSeo::create($data);
        }
    }

    public function update($validated, $key)
    {
        $seoDataQuery = GlobalSeo::query()->where('key',$key);
        $seoData = $seoDataQuery->first();
        if (!empty($validated['og_image'])) {
            $seoData->og_image ? $this->fileSystem->delete($seoData->og_image) : '';
            $validated['og_image'] = $this->fileSystem->upload($validated['og_image'], 'uploads/seo');
        }
        if (!empty($validated['twitter_image'])) {
            $seoData->twitter_image ? $this->fileSystem->delete($seoData->twitter_image) : '';
            $validated['twitter_image'] = $this->fileSystem->upload($validated['twitter_image'], 'uploads/seo');
        }
        if (!empty($validated['favicon'])) {
            $seoData->favicon ? $this->fileSystem->delete($seoData->favicon) : '';
            $validated['favicon'] = $this->fileSystem->upload($validated['favicon'], 'uploads/seo');
        }
        if (!empty($validated['site_logo'])) {
            $seoData->site_logo ? $this->fileSystem->delete($seoData->site_logo) : '';
            $validated['site_logo'] = $this->fileSystem->onlyUpload($validated['site_logo'], 'uploads/logo');
        }
        $seoDataQuery->update($validated);
    }
}
