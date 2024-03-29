<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLeaveRequest extends FormRequest
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
            'start_date'    => 'required|date',
            'end_date'      => 'required|date',
            'attachment'         => 'required_if:reason,Izin,Sakit',
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

            'start_date.required' => 'Tanggal mulai wajib diisi.',

            'end_date.required' => 'Tanggal selesai wajib diisi.',

            'attachment.required_if' => 'File wajib diunggah jika alasan izin atau sakit.',
        ];
    }
}
