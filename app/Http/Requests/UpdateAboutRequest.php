<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest extends FormRequest
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
            'lang' => "required|unique:about",
            'info' => "required",
            'vision' => "required",
            'message' => "required",
            'head_message' => "required",
            'head_name' => "required|string",
        ];
    }

    public function attributes()
    {
        return [
            'info' => 'الرسالة التعريفية',
            'lang' => 'اللغة',
            "vision" => "الرؤية",
            "message" => "الرسالة",
            "head_message" => "كلمة رئيس الجمعية",
            "head_name" => "اسم رئيس الجمعية",
        ];
    }
}
