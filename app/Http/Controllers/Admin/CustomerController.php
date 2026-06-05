<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        
        // Debe apuntar correctamente usando puntos para las subcarpetas
        return view('customers.Admin.list', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('customers.Admin.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CustomerRequest $request, Customer $customer)
    {
        // 1. ELIMINADO: Quitamos el findOrFail porque Laravel ya cargó el modelo automáticamente.

        // 2. Si manejas el rol en la tabla 'users', lo actualizamos primero:
        if ($customer->user && $request->has('role')) {
            $customer->user->update([
                'role' => $request->role
            ]);
        }

        // 3. Actualizamos los datos del cliente usando solo lo que ya fue validado en tu CustomerRequest
        $customer->update($request->validated());

        // 4. Redireccionamos (Cambié 'success' por 'status' para que coincida con tu SweetAlert de la vista)
        return redirect()->route('customers.Admin.list')->with('status', 'Cliente actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer): RedirectResponse
    {
        // 1. Guardamos una referencia al usuario antes de borrar al cliente
        $user = $customer->user;

        // 2. Eliminamos al cliente
        $customer->delete();

        // 3. Si el cliente tenía un usuario vinculado, lo eliminamos también
        if ($user) {
            $user->delete();
        }

        // 4. Redireccionamos con el mensaje para SweetAlert
        return redirect()->route('customers.Admin.list')
            ->with('status', '¡Cliente y su cuenta de usuario eliminados con éxito!');
    }
}
