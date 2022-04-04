<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            'institution_number'            => 'required',
            'id_card'                       => 'required',
            'education_personnel_number'    => 'required',
            'gender'                        => 'required|' . new EnumValue(Gender::class),
            'join_date'                     => 'required',
            'instituion_id'                 => 'required',
            'position_id'                   => 'required',
        ];
    }
}
