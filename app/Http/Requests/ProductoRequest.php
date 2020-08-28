<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
        return [ 'marca_id' => 'required|integer',
        'modelo' => "required|string|min:1|max:100",
        'descripcion' => "required|string|min:0|max:300",
        'precio' => "required|integer|min:1",
        'stock' => "required|integer|min:1",
        'origen' => "required|string|min:1|max:100",
        'color' => "required|string|min:1|max:100",
        'correa' => "required|string|min:1|max:100",
        'caja' => "required|string|min:1|max:100",
        'marco' => "required|string|min:1|max:100",
        'funciones' => "required|string|min:1|max:100",
        'garantia' => "required|string|min:1|max:100",
        'movimiento' => "required|string|min:1|max:100",
        "imagen1" => "image",
        "imagen2" => "image",
        "imagen3" => "image"
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El campo es obligatorio',
            'marca_id.required' => 'Debe seleccionar una marca',
            'integer' => 'El campo :attribute debe ser numerico',
            'min' => 'El campo :attribute debe tener al menos :min caracteres',
            'max' => 'El campo :attribute no bebe superar :max caracteres',
            'min' => 'El campo :attribute debe ser mayor a :min',
            'max' => 'El campo :attribute debe ser menor a :max',
            'imagen1' => 'La imagen debe ser de formato .jpg, .png, etc',
            'imagen2' => 'La imagen debe ser de formato .jpg, .png, etc',
            'imagen3' => 'La imagen debe ser de formato .jpg, .png, etc'
        ];
    }
}
