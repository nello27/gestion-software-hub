<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Requests\CustomerRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(): View
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        // 🚀 El editor ahora sabrá perfectamente qué es 'customer' y quitará la línea roja
        $customer = $user->customer; 

        if (!$customer) {
            abort(404, 'No se encontró un perfil de cliente para este usuario.');
        }

        return view('customers.edit', compact('customer'));
    }

    /**
     * Actualiza el perfil del propio cliente logueado.
     */
    public function update(UpdateCustomerRequest $request): RedirectResponse
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $customer = $user->customer;

        if (!$customer) {
            abort(404, 'No se encontró el perfil de cliente.');
        }

        // 1. Llenamos los modelos con los datos nuevos (pero NO los guardamos en DB todavía)
        $user->fill([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        $customer->fill([
            'name'     => $request->name,
            'document' => $request->document,
            'phone'    => $request->phone,
            'address'  => $request->address,
        ]);

        // 2. 🕵️‍♂️ Evaluamos si el usuario alteró algún input comparando los datos nuevos con los viejos
        if (!$user->isDirty() && !$customer->isDirty()) {
            // Redirigimos de vuelta enviando un estado de "no_changes"
            return redirect()->route('customer.edit')->with('info', 'No realizaste ningún cambio en tu perfil.');
        }

        // 3. Si pasó la condición anterior, significa que sí hay cambios. Guardamos en la DB.
        $user->save();
        $customer->save();

        return redirect()->route('customer.edit')->with('status', '¡Tu perfil ha sido actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
