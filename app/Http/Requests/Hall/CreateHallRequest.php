<?php

namespace App\Http\Requests\Hall;

use Illuminate\Foundation\Http\FormRequest;

class CreateHallRequest extends FormRequest
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
            'owner_id' => 'required',
            'phone' => 'required|numeric',
            'governorate_id' => 'required',
            'address' => 'required|string',
            'price' => 'required|numeric',
            'whatsapp' => 'required',
            'description' => 'required|string',
            'image' => 'required',
        ];
    }

    public function messages ()
{
    return [
        'name.required' => 'يرجى ادخال اسم الصالة',
        'name.string' => 'الاسم يجب ان يكون نص',

        'owner_id.required' => 'يرجى اختيار اسم مالك الصالة',

        'phone.required' => 'يرجى ادخال الهاتف',
        'phone.numeric' => 'الهاتف يجب ان يكون المدخل رقم',

        'governorate_id.required' => 'يرجى اختيار المحافظة',

        'address.required' => 'يرجى ادخال العنوان',
        'address.string' => 'العنوان يجب ان يكون نص',

        'price.required' => 'يرجى ادخال السعر',
        'price.numeric' => 'يرجى ادخال السعر كرقم',

        'whatsapp.required' => 'يرجى ادخال رابط الواتس اب',

        'description.required' => '  يرجى ادخال وصف ,اقل من 255 حرف ',
        'description.string' => 'الوصف يجب ان يكون نص',

        'image.required' => 'يرجى ادخال صورة',
    ];
}

}

