<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAppreciationRequest extends FormRequest
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
            'employee_id'   => 'required',
            'name'          => 'required',
            'date'          => 'required',
            'files'         => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
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
            'employee_id.required' => 'Pegawai wajib diisi.',

            'name.required' => 'Nama penghargaan wajib diisi.',

            'date.required' => 'Tahun penghargaan wajib diisi.',
        ];
    }
}
