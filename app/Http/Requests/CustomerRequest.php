<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
        // Obtenemos el cliente que se está editando desde la ruta
        $customer = $this->route('customer'); 

        return [
            'name' => ['required', 'string', 'max:255'],
            'document' => ['required', 'string', 'max:50'],
            
            // 🚀 CORREGIDO: Apuntamos a la tabla 'users' e ignoramos el ID del usuario vinculado
            'email' => [
                'required', 
                'string', 
                'email', 
                'max:255', 
                'unique:users,email,' . $customer->user_id
            ],
            
            'phone' => ['nullable', 'string', 'max:20'],
            'address' => ['nullable', 'string', 'max:255'],
            'role' => ['required', 'string', 'in:customer,admin'], // Validamos el rol si viene en el form
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre del cliente es obligatorio.',
            'name.max' => 'El nombre no puede superar 255 caracteres.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser una dirección de correo válida.',
            'email.unique' => 'El correo electrónico ya está en uso.',
            'phone.max' => 'El número de teléfono no puede superar 20 caracteres.',
            'address.max' => 'La dirección no puede superar 255 caracteres.',
        ];
    }
}
