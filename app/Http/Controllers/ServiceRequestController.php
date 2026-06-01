<?php

namespace App\Http\Controllers;

use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequestRequest;

use Illuminate\Support\Facades\Mail;
use App\Mail\ServiceRequestCreated;

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
    public function store(ServiceRequestRequest $request)
    {

        /*$service_Request = new Service_Request;

        $service_Request->service_id = $request->input('service_id');
        $service_Request->name = $request->input('name');
        $service_Request->email = $request->input('email');
        $service_Request->phone = $request->input('phone');
        $service_Request->message = $request->input('message');
        $service_Request->status = 'Pendiente';
        
        $service_Request->save();*/

        $data = $request->validated();
        $data['status'] = 'Pendiente';

        $serviceRequest = ServiceRequest::create($data);

        // 🔥 Enviar correo al usuario
        #Mail::to($data['email'])->send(new ServiceRequestCreated($serviceRequest));

        session()->flash(
            'status',
            'Su solicitud fue enviada. Recibirá un correo de confirmación.'
        );

        return to_route('services.index');

        //return $request;
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
