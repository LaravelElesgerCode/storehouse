<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class clientsRequest extends FormRequest
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
            'name'=>'required|min:3|max:15',
            'surename'=>'required|min:3|max:15',
            
            'tel'=>'required|min:3|max:25',
            'email'=>'required|email',
            
            'image'=>'required'
        ];
    }


    public function messages(): array
    {
        return [
            'name.required'=>'Ad daxil edilməyib!',
            'name.min'=>'Ad minimum 3 simvol olmalıdır!',
            'name.max'=>'Ad maksimum 15 simvol ola bilər!',

            'surename.required'=>'Soyad daxil edilməyib!',
            'surename.min'=>'Soyad minimum 3 simvol olmalıdır!',
            'surename.max'=>'Soyad maksimum 15 simvol ola bilər!',

            'tel.required'=>'Nömrə daxil edilməyib!',
            'tel.min'=>'Nömrə minimum 3 simvol olmalıdır!',
            'tel.max'=>'Nömrə maksimum 25 simvol ola bilər!',
            
            'email.required'=>'Email daxil edilməyib!',
            'email.email'=>'Email düzgün daxil edilməyib!',
            
            'image.required'=>'Şəkil daxil edilməyib!'
        ];
    }
}
