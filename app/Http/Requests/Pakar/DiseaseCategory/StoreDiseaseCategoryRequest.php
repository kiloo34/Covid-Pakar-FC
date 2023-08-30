<?php

namespace App\Http\Requests\Pakar\DiseaseCategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreDiseaseCategoryRequest extends FormRequest
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
            'category' => 'required|max:255',
            'disease' => 'required'
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
            'category.required' => 'Kategori tidak boleh kosong',
            'category.max' => 'Kategori terlalu panjang maksimal :max karakter',
            'disease.required' => 'Pilih Salah Satu',
        ];
    }
}
