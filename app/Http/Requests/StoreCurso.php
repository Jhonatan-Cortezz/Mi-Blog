<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;/* retorno true para que le paquete de autorizacion funcione */
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //aqui paso las reglas que anteriormente tenia en el controlador
            'name' => 'required|max:10',/* campo requerido con maximo de 10 caracteres */
            'descripcion' => 'required',
            'categoria' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nombre del curso',
            // si el campo name falla me pone ese texto en el mensaje en vez de solo name
        ];
    }

    // aca pongo los mensajes personalizados para la validacion de formularios
    public function messages()
    {
        return [
            'descripcion.required' => 'Debe ingresar una descripcion del curso'
        ];
    }
}
