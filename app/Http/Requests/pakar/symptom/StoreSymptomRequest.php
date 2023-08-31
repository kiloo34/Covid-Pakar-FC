<?php

namespace App\Http\Requests\Pakar\Symptom;

use Illuminate\Foundation\Http\FormRequest;

class StoreSymptomRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'symptomName' => 'required|unique:symptoms,name|max:255',
            'diseaseCategory' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'symptomName.required' => 'Nama Gejala / Rule tidak boleh kosong',
            'symptomName.unique' => 'Nama Gejala / Rule sudah tersedia',
            'symptomName.max' => 'Nama Gejala / Rule terlalu panjang maksimal :max karakter',
            'diseaseCategory.required' => 'Pilih Salah Satu',
        ];
    } 
}
