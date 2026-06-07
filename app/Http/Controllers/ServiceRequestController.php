<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequestRequest;

use Illuminate\Support\Facades\Mail;
use App\Mail\ServiceRequestCreated;
use Illuminate\Support\Facades\Auth; // 👈 Importante para el controlador

class ServiceRequestController extends Controller
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
    public function store(ServiceRequestRequest $request, User $user = null)
    {
        $data = $request->validated();
        $data['status'] = 'Pendiente';

        // Si el usuario está autenticado, obligamos a que los datos sean los de su sesión
        if (Auth::check()) {
            $user = Auth::user();
            $data['name'] = $user->name;
            $data['email'] = $user->email;
            $data['user_id'] = $user->id;
        }

        $serviceRequest = ServiceRequest::create($data);
        
        Mail::to($serviceRequest->email)->send(new ServiceRequestCreated($serviceRequest));
        
        session()->flash(
            'status',
            'Su solicitud fue enviada. Recibirá un correo de confirmación.'
        );

        return to_route('services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceRequest $service_Request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceRequest $service_Request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ServiceRequest $service_Request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceRequest $service_Request)
    {
        //
    }
}
