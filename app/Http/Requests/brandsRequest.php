<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class brandsRequest extends FormRequest
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
            'brand'=>'required|min:3|max:15',
            'image'=>'required'
        ];
    }


    public function messages(): array 
    {
        return [
            'brand.required'=>'Brend daxil edilməyib!',
            'brand.min'=>'Brend minimum 3 simvol olmalıdır!',
            'brand.max'=>'Brend maksimum 15 simvol olmalıdır!',

            'image.required'=>'Logo daxil edilməyib!'
        ];
    }
}
