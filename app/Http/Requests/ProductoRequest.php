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
        return [
            'NombreArticulo' => 'required|alpha|max:50|min:3',
            'Seccion' => 'required|alpha|max:30|min:3',
            'Precio' => 'required|numeric',
            'PaisOrigen' => 'required',
            'Fecha' => 'required'
        ];
    }
}
