<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|min:3',
            'descripcion'=>'required',
            'slug'=>'required|unique:cursos',
            'categoria'=>['required','min:3'],
        ];
    }
    public function messages(): array
    {
        return[
            //Si hubiera más validaciones pues se pondria el nombre.namevalidacion
            'name.required'=>'El nombre es obligatorioooooooo',
        ];
    }

    public function attributes(): array
    {
        return[
            'name'=>'Guapon',
        ];
    }
}
