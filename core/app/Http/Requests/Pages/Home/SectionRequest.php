<?php

namespace App\Http\Requests\Pages\Home;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
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
            'title' => 'required',
            'description' => '',
            'button_text' => '',
            'image' => 'mimes:jpeg,png,jpg,webp',
            'more_content' => '',
            'more_button' => '',
            'video_link' => '',
        ];
    }
}
