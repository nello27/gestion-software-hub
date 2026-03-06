<x-layout meta-title="Admin Servicios">

@session('status')
    <script>
        Swal.fire({
            title: '¡Operación Exitosa!',
            text: "{{ session('status') }}",
            icon: 'success',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#3085d6', // Un azul estándar profesional
        });
    </script>
@endsession

<div class="container py-5">

    <!-- Card contenedora -->
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    
                    <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Servicio</th>
                            <th>Mensaje</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Editar</th>
                        </tr>
                    </thead>

                    <tbody>
                        
                        @foreach($services as $service)
                        <!-- Aquí va tu foreach -->
                  
                        <tr>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->email }}</td>
                            <td>{{ $service->phone }}</td>
                            <td>{{ $service->service->name }}</td>
                            <td>{{ $service->message }}</td>
                            <td>{{ $service->status }}</td>
                            <td class="text-center">
                            <a href="{{ route('request.Admin.edit', $service->id) }}"  class="btn btn-sm btn-outline-primary">
                                    Editar
                                </a>
                            </td>
                            
                        </tr>
                        
                        @endforeach
                        <!-- Fin ejemplo -->

                    </tbody>
                </table>
            </div>
        </div>
    </div>
                    <!--Importante para paginación-->
                <div class="p-3">
                    {{ $services->links('pagination::bootstrap-5') }}
                </div>
</div>



</x-layout>