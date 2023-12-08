<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productsRequest extends FormRequest
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
            'brand_id'=>'required',

            'product'=>'required|min:3|max:15',  
            'purchase'=>'required|numeric|min:1|max:15',

            'sale'=>'required|numeric|min:1|max:15',
            'amount'=>'required|numeric|min:1|max:15',

            'image'=>'required',
        ];
    }


    public function messages(): array
    {
        return [
            'brand_id.required'=>'Brend daxil edilməyib!',

            'product.required'=>'Məhsul daxil edilməyib!',
            'product.min'=>'Məhsul minimum 3 simvol olmalıdır!',
            'product.max'=>'Məhsul maksimum 15 simvol olmalıdır!',

            'purchase.required'=>'Alış daxil edilməyib!',
            'purchase.numeric'=>'Alış/ Yalnız rəqəm daxil edə bilərsiniz(1,2,3...)!',
            'purchase.min'=>'Alış minimum 1 simvol olmalıdır!',
            'purchase.max'=>'Alış maksimum 15 simvol olmalıdır!',

            'sale.required'=>'Satış daxil edilməyib!',
            'sale.numeric'=>'Satış/ Yalnlz rəqəm daxil edə bilərsiniz(1,2,3...)!',
            'sale.min'=>'Satış minimum 1 simvol olmalıdır!',
            'sale.max'=>'Satış maksimum 15 simvol olmalıdır!',

            'amount.required'=>'Miqdar daxil edilməyib!',
            'amount.numeric'=>'Miqdar/ Yalnız rəqəm daxil edə bilərsiniz(1,2,3...)!',
            'amount.min'=>'Miqdar minimum 1 simvol olmalıdır!',
            'amount.max'=>'Miqdar maksimum 15 simvol olmalıdır!',

            'image.required'=>'Şəkil daxil edilməyib!'
        ];
    }
}
