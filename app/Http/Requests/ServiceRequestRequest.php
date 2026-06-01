<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequestRequest extends FormRequest
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
                'service_id' => ['required', 'integer', 'exists:services,id'],
                'name'       => ['required', 'string', 'max:255'],
                'email' => ['required','email:rfc,dns'],
                'phone' => ['nullable', 'regex:/^[0-9+\-\s]{7,20}$/'],
                'message'    => ['required', 'string', 'max:2000'],
                #'price' => ['required', 'numeric', 'min:0'],
            ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'email.required' => 'El correo es obligatorio.',
            'email.email' => 'Debe ingresar un correo válido.',
            'phone.regex' => 'Debe ingresar un télefono válido.',
            'service_id.exists' => 'El servicio seleccionado no es válido.',
            'message'    => 'Por favor ingrese su Mensaje.',

        ];
    }
}
