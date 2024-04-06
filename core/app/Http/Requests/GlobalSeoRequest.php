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
            'site_name'             => 'required',
            'title'                 => 'required',
            'description'           => 'required',
            'keywords'              => 'required',
            'og_title'              => 'required',
            'og_description'        => 'required',
            'og_site_name'          => 'required',
            'og_updated_time'       => 'required',
            'og_image'              => 'mimes:jpg,png',
            'article_published_time' => 'required',
            'article_modified_time' => 'required',
            'twitter_card'          => 'required',
            'twitter_title'         => 'required',
            'twitter_description'   => 'required',
            'twitter_image'         => 'mimes:jpg,png',
            'favicon'               => 'mimes:png'
        ];
    }
}
