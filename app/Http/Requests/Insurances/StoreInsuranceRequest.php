<?php

namespace App\Http\Requests\Insurances;

use Illuminate\Foundation\Http\FormRequest;

class StoreInsuranceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'SoBHXH' => 'required|numeric',
            'ThgBHXH' => 'required|numeric',
            'NmBHXH' => 'required|numeric',
            'SotheBHXH' => 'required|numeric',
            'MadkyKCB' => 'required|numeric',
            'NbdTheYT' => 'required',
            'NktTheYT' => 'required',
            'PCKVBHXH' => 'required|numeric',
            'MSTtncn' => 'required|numeric',
            'SoNgPgPt'=> 'required|numeric'
        ];
        return $rules;
    }
    public function messages()
    {
        return [
            'SoBHXH.required'=>"Vui lòng nhập Số BHXH",
            'SoBHXH.numeric'=>'Số BHXH ko hợp lệ',
            'ThgBHXH.required'=>"Vui lòng nhập",
            'ThgBHXH.numeric'=>'Tháng BHXH ko hợp lệ',
            'NmBHXH.required'=>"Vui lòng nhập",
            'NmBHXH.numeric'=>'Năm bắt đầu BHXH ko hợp lệ',
            'SotheBHXH.required'=>"Vui lòng nhập",
            'SotheBHXH.numeric'=>'Số Thẻ BHXH ko hợp lệ',
            'MadkyKCB.required'=>"Vui lòng nhập",
            'MadkyKCB.numeric'=>'Mã Đăng Ký KCB ko hợp lệ',
            'NbdTheYT.required'=>"Vui lòng nhập",
            'NktTheYT.required'=>"Vui lòng nhập",
            'PCKVBHXH.required'=>"Vui lòng nhập",
            'PCKVBHXH.numeric'=>'PCKVBHXH ko hợp lệ',
            'MSTtncn.required'=>"Vui lòng nhập",
            'MSTtncn.numeric'=>'MSTtncn ko hợp lệ',
            'SoNgPgPt.required'=>"Vui lòng nhập",
            'SoNgPgPt.numeric'=>'Số người phụ thuộc ko hợp lệ',
        ];
    }
}
