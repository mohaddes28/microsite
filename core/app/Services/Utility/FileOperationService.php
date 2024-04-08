<?php

namespace App\Services\Utility;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
Use Image;

class FileOperationService
{
    /**
     * Single File Upload
     * @param $file
     * @param $folder
     * @return string
     */
    public function upload($file, $folder): string
    {
        $file_name = $file->getClientOriginalName();
        if (file_exists($folder.'/'.$file_name.Str::random(10).'.webp')) {
            $original = new \RuntimeException('A file already exist with this name, Please rename this file!');
            throw $original;
        }
        $image = Image::make($file)->encode('webp', 60)->save($folder.'/'.$file_name.'.webp');
        return $image->dirname . '/' . $image->basename;
    }
    public function uploadResized($file, $folder, $width, $height): string
    {
        $file_name = $file->getClientOriginalName();
        $image = Image::make($file)->resize($width, $height)->encode('webp', 60)->save($folder.'/'.$file_name.'.webp');
        return $image->dirname . '/' . $image->basename;
    }

    public function onlyUpload($file, $folder): string
    {
        $file_name = $file->getClientOriginalName();
        $file_path = $folder . '/' . $file_name;
        if (file_exists($file_path)) {
            $original = new \RuntimeException('A file already exist with this name, Please rename this file!');
            throw $original;
        }
        $image = $file->move($folder, $file_name);
        return $file_path;
    }

    public function delete($path)
    {
        if(File::exists($path))
            File::delete($path);
    }
}
