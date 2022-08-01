<?php

namespace App\Http\Requests\Reserve;

use Illuminate\Foundation\Http\FormRequest;

class CreateReserveRequest extends FormRequest
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
            'start_time' => 'required',
            'end_time' => 'required',
            'occasion' => 'required',
        ];
    }

    public function messages ()
    {
        return [
            'start_time.required' => 'يرجى اختيار تاريخ و وقت بداية الحجز',
            'end_time.required' => 'يرجى اختيار تاريخ و وقت نهاية الحجز',
            'occasion.required' => 'يرجى اختيار المناسبة',
        ];
    }
}
