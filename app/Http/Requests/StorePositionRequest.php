<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePositionRequest extends FormRequest
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
            'name' => 'required|max:255',
            'theme_color' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama jabatan harus diisi',
            'name.max' => 'Nama jabatan maksimal 255 karakter',

            'theme_color.required' => 'Warna tema harus diisi',
            'theme_color.max' => 'Warna tema maksimal 255 karakter',
        ];
    }
}
