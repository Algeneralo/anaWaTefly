<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConfigRequest extends FormRequest
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
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'phone' => 'required',
            'location_ar' => 'required',
            'location_en' => 'required',
            'welcome_message_ar' => 'required',
            'welcome_message_en' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'welcome_message_ar' => 'الرسالة الترحيبية باللغة بالعربية',
            'welcome_message_en' => 'الرسالة الترحيبية باللغة بالعربية',
            'facebook' => 'الفيسبوك',
            'twitter' => 'تويتر',
            'instagram' => 'انستجرام',
            'location_ar' => 'العنوان بالعربية',
            'location_en' => 'العنوان بالانجليزية',
        ];
    }
}
