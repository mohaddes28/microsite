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

    public function checkRecord()
    {
        $globalSeo = GlobalSeo::query();
        if ($globalSeo->count()) {
            return $globalSeo->first();
        }else{
            $data = [
                'site_name'             => '',
                'title'                 => '',
                'description'           => '',
                'keywords'              => '',
                'og_title'              => '',
                'og_description'        => '',
                'og_site_name'          => '',
                'og_updated_time'       => '',
                'og_image'              => '',
                'article_published_time' => '',
                'article_modified_time' => '',
                'twitter_card'          => '',
                'twitter_title'         => '',
                'twitter_description'   => '',
                'twitter_image'         => '',
                'favicon'               => ''
            ];
            $globalSeo = GlobalSeo::create($data);
            return $globalSeo;
        }
    }

    public function update($validated, $id)
    {
        $seoData = GlobalSeo::query()->findOrFail($id);
        if (!empty($validated['og_image'])) {
            $this->fileSystem->delete($seoData->og_image);
            $validated['og_image'] = $this->fileSystem->upload($validated['og_image'], 'uploads/seo');

        }
        if (!empty($validated['twitter_image'])) {
            $this->fileSystem->delete($seoData->twitter_image);
            $validated['twitter_image'] = $this->fileSystem->upload($validated['twitter_image'], 'uploads/seo');
        }
        if (!empty($validated['favicon'])) {
            $this->fileSystem->delete($seoData->favicon);
            $validated['favicon'] = $this->fileSystem->upload($validated['favicon'], 'uploads/seo');
        }
        $seoData->update($validated);
    }
}
