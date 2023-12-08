<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ordersRequest extends FormRequest
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
            'clients_id'=>'required',
            'products_id'=>'required',  
            'quantity'=>'required|numeric|min:1|max:15'
        ];
    }


    public function messages(): array
    {
        return [
            'quantity.required'=>'Miqdar daxil edilməyib!',
            'quantity.numeric'=>'Miqdar/ Yalnız rəqəm daxil edə bilərsiniz(1,2,3...)!',
            'quantity.min'=>'Miqdar minimum 1 simvol olmalıdır!',
            'quantity.max'=>'Miqdar maksimum 15 simvol olmalıdır!',

            'clients_id.required'=>'Müşdəri daxil edilməyib!',

            'products_id.required'=>'Məhsul daxil edilməyib!',
        ];
    }
}
