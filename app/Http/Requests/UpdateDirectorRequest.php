<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDirectorRequest extends FormRequest
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
            "name_ar" => "required|string",
            "name_en" => "required",
            "position_ar" => "required|string",
            "position_en" => "required|string",
            "image_file" => "mimes:jpeg,jpg,png",
        ];
    }

    public function attributes()
    {
        return [
            "name_ar" => "الاسم بالعربية",
            "name_en" => "الاسم بالانجليزية",
            "position_ar" => "المنصب بالعربية",
            "position_en" => "المنصب بالانجليزية",
        ];
    }
}
