<?php

namespace App\Http\Requests\Hall;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHallRequest extends FormRequest
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
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'governorate_id' => 'required',
            'address' => 'required|string',
            'price' => 'required|numeric',
            'whatsapp' => 'required',
            'description' => 'required|string',

        ];
    }

    public function messages ()
    {
        return [
            'name.required' => 'يرجى ادخال اسم الصالة',
            'name.string' => 'الاسم يجب ان يكون نص',

            'phone.required' => 'يرجى ادخال الهاتف',
            'phone.numeric' => 'الهاتف يجب ان يكون المدخل رقم',

            'governorate_id.required' => 'يرجى اختيار المحافظة',

            'address.required' => 'يرجى ادخال العنوان',
            'address.string' => 'العنوان يجب ان يكون نص',

            'price.required' => 'يرجى ادخال السعر',
            'price.numeric' => 'يرجى ادخال السعر كرقم',

            'whatsapp.required' => 'يرجى ادخال رابط الواتس اب',

            'description.required' => 'يرجى ادخال وصف',
            'description.string' => 'الوصف يجب ان يكون نص',

        ];
    }
}
