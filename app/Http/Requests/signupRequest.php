<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'age' => 'required|numeric',
            'date' => 'required|string',
            'phone' => 'required|numeric',
            'web' => 'required|string',
            'address' => 'required|string|max:255',
        ];
    }
    public function messages()
    {
        return [
            'name.string' => 'Tên là trường bắt buộc.',
            'age.numeric' => 'Tuổi là trường bắt buộc.',
            'date.string' => 'Ngày sinh là trường bắt buộc.',
            'phone.numeric' => 'Số điện thoại là trường bắt buộc.',
            'web.string' => 'Địa chỉ website là trường bắt buộc.',
            'address.string' => 'Địa chỉ là trường bắt buộc.',
        ];
    }
}
