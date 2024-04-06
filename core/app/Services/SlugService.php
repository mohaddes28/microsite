<?php

namespace App\Services;

use Illuminate\Support\Str;

class SlugService
{
    public function createSlug($text, $model): string
    {
        $slug = strtolower($text);
        $slug = str_replace(array('[\', \']'), '', $slug);
        $slug = preg_replace('/\[.*\]/U', '', $slug);
        $slug = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $slug);
        $slug = htmlentities($slug, ENT_COMPAT, 'utf-8');
        $slug = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $slug );
        $slug = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $slug);

        # slug repeat check
        $latest = $model->whereRaw("slug regexp '^{$slug}(-[0-9]+)?$'")
            ->latest('id')
            ->value('slug');

        if($latest){
            $pieces = explode('-', $latest);
            $number = intval(end($pieces));
            $slug .= '-' . ($number + 1);
        }

        return $slug;
    }
}
