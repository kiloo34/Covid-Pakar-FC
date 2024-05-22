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
            'diseaseCategory' => 'required',
            'category' => 'required',
            'symptomName' => 'required_if:category,new|unique:symptoms,name|max:255',
            'symptomNameNew' => 'required_if:symptomName,new|unique:symptoms,name|max:255',
            'symptomCategoryName' => 'required_if:symptomName,new|unique:symptoms,name|max:255',
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
            'symptomName.required_if' =>  'Nama Gejala tidak boleh kosong jika ada kategori baru',
            'symptomNameNew.required_if' =>  'Nama Gejala tidak boleh kosong jika ada gejala baru',
            'symptomCategoryName.required_if' =>  'Nama Kategori Gejala tidak boleh kosong jika ada gejala baru',
        ];
    } 
}
