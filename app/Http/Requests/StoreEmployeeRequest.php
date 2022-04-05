<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'name'                          => 'required|max:255',
            'institution_number'            => 'required|unique:employees,institution_number',
            'id_card'                       => 'required|unique:employees,id_card',
            'education_personnel_number'    => 'required|unique:employees,education_personnel_number',
            'gender'                        => 'required',
            'join_date'                     => 'required',
            'institution_id'                => 'required',
            'position_id'                   => 'required',
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
            'name.required' => 'Nama wajib diisi.',

            'institution_number.required'   => 'Nomor induk yayasan wajib diisi.',
            'institution_number.unique'     => 'Nomor induk yayasan sudah ada sebelumnya.',

            'id_card.required'  => 'Nomor ktp wajib diisi.',
            'id_card.unique'    => 'Nomor ktp sudah ada sebelumnya.',

            'education_personnel_number.required'   => 'Nomor unik pendidik dan tenaga kependidikan wajib diisi.',
            'education_personnel_number.unique'     => 'Nomor unik pendidik dan tenaga kependidikan sudah ada sebelumnya.',

            'gender.required'   => 'Jenis kelamin wajib diisi.',

            'join_date.required'   => 'Tanggal bergabung wajib diisi.',

            'institution_id.required'   => 'Lembaga wajib diisi.',

            'position_id.required'   => 'Posisi wajib diisi.',
        ];
    }
}
