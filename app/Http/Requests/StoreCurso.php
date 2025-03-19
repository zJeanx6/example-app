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
        return true; //Cambiar a false para activar esta funcionalidad de validar rol, para pasar a la funcion.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=> 'required|min:3',
            'descripcion'=>'required',
            'categoria'=>'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'descripcion.required' => 'La descripcion es obligatoria',
            'categoria.required' => 'La categoria es obligatoria'
        ];
    }   

    // public function attributes(): array
    // {
    //     return [
    //         'name' => 'nombre del curso'
    //     ];
    // }
}
