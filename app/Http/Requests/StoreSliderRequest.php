<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
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
            "caption_ar" => "required",
            "caption_en" => "required",
            "image_file" => "required|mimes:jpeg,jpg,png",
        ];
    }

    public function attributes()
    {
        return [
            "caption_ar" => "النص بالعربية",
            "caption_en" => "النص بالانجليزية",
        ];
    }
}
