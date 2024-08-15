<?php

namespace App\Http\Requests\LaborContract;

use Illuminate\Foundation\Http\FormRequest;

class StoreLaborContractRequest extends FormRequest
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
            'MAHDLD' => 'required',
            'HTLD' => 'required',
            'DVSDLD' => 'required',
            'NguoiDD' => 'required',
            'NgayBDHD' => 'required',
            'NgayHHHD' => 'required',
            'Ngaynhan' => 'required',
            'MaNgach' => 'required',
            'NgachL' => 'required',
            'BacL'=> 'required|numeric',
            'HesoL'=> 'required|numeric',
            'TGtinhL' => 'required',
            'MucL' => 'required',
            'HeSoPCCV' => 'required|numeric',
            'MucPCCV' => 'required|numeric',
            'HeSoPCKV' => 'required|numeric',
            'HeSoPCTN' => 'required|numeric',
            'HeSoPCDH' => 'required|numeric',
            'Ghichu' => 'required',
        ];
        return $rules;
    }
    public function messages()
    {
        return [
            'MAHDLD.required'=>"Vui lòng nhập Số MAHDLD",


            'HTLD.required'=>"Vui lòng nhập",


            'DVSDLD.required'=>"Vui lòng nhập",

            'NguoiDD.required'=>"Vui lòng nhập",

            'NgayBDHD.required'=>"Vui lòng nhập",

            'NgayHHHD.required'=>"Vui lòng nhập",

            'Ngaynhan.required'=>"Vui lòng nhập",

            'MaNgach.required'=>"Vui lòng nhập",


            'NgachL.required'=>"Vui lòng nhập",



            'BacL.required'=>"Vui lòng nhập",
            'BacL.numeric'=>'BacL ko hợp lệ',

            'HesoL.required'=>"Vui lòng nhập",
            'HesoL.numeric'=>'HesoL ko hợp lệ',

            'TGtinhL.required'=>"Vui lòng nhập",

            'MucL.required'=>"Vui lòng nhập",

            'HeSoPCCV.required'=>"Vui lòng nhập",
            'HeSoPCCV.numeric'=>'HesoL ko hợp lệ',

            'MucPCCV.required'=>"Vui lòng nhập",
            'MucPCCV.numeric'=>'HesoL ko hợp lệ',

            'HeSoPCKV.required'=>"Vui lòng nhập",
            'HeSoPCKV.numeric'=>'HesoL ko hợp lệ',

            'HeSoPCTN.required'=>"Vui lòng nhập",
            'HeSoPCTN.numeric'=>'HesoL ko hợp lệ',

            'HeSoPCDH.required'=>"Vui lòng nhập",
            'HeSoPCDH.numeric'=>'HesoL ko hợp lệ',

            'Ghichu.required'=>"Vui lòng nhập",

        ];
    }
}
