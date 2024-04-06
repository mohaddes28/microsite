<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScreenShootRequest extends FormRequest
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
            'image' => 'mimes:jpeg,png,jpg,gif|dimensions:width=280,height=500'
        ];
    }

    public function messages()
    {
        return [
            'image.dimensions'  => 'The image dimensions will be 280x500px',
            'image.mimes'       => 'The image format will be jpg, jpeg, png, gif.',
        ];
    }
}
