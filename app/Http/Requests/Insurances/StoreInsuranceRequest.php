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
            'SoBHXH' => 'required|max:200',
            'ThgBHXH' => 'required',
            'NmBHXH' => 'required',
            'SotheBHXH' => 'required',
            'MadkyKCB' => 'required',
            'NbdTheYT' => 'required',
            'NktTheYT' => 'required',
            'PCKVBHXH' => 'required',
            'MSTtncn' => 'required',
            'SoNgPgPt'=> 'required'
        ];
        return $rules;
    }
}
