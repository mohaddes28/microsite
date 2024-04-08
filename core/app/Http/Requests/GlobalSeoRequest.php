<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GlobalSeoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'site_name'                 => '',
            'email'                     => '',
            'title'                     => '',
            'description'               => '',
            'keywords'                  => '',
            'og_title'                  => '',
            'og_description'            => '',
            'og_site_name'              => '',
            'og_updated_time'           => '',
            'og_image'                  => 'mimes:jpg,jpeg,png',
            'article_published_time'    => '',
            'article_modified_time'     => '',
            'twitter_card'              => '',
            'twitter_title'             => '',
            'twitter_description'       => '',
            'twitter_image'             => 'mimes:jpg,jpeg,png',
            'favicon'                   => 'mimes:png',
            'site_logo'                 => 'mimes:png'
        ];
    }
}
