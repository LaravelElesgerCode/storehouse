<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class xercRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'appointment'=>'required|min:3|max:15',
            'amount'=>'required|numeric|min:1|max:15',
        ];
    }


    public function messages(): array
    {
        return [
            'appointment.required'=>'Təyinat yeri daxil edilməyib!',
            'appointment.min'=>'Təyinat minimum 3 simvol olmalıdır!',
            'appointment.max'=>'Təyinat maksimum 15 simvol olmalıdır!',

            'amount.required'=>'Məbləğ yeri daxil edilməyib!',
            'amount.numeric'=>'Məbləğ/ Yalnız rəqəm daxil edə bilərsiniz(1,2,3...)!',
            'amount.min'=>'Məbləğ minimum 1 simvol olmalıdır!',
            'amount.max'=>'Məbləğ maksimum 15 simvol olmalıdır!',
        ];
    }
}
