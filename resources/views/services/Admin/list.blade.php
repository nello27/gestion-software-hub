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

    <!-- Título -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Listado de Servicios</h2>
        <a href="#" class="btn btn-primary">
            + Nuevo Servicio
        </a>
    </div>

    <!-- Card contenedora -->
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    
                    <thead class="table-dark">
                        <tr>
                            <th>Servicio</th>
                            <th>Categoría</th>
                            <th>Descripción</th>
                            <th class="text-end">Precio</th>
                            <th class="text-center">Editar</th>
                        </tr>
                    </thead>

                    <tbody>
                        
                        @foreach($services as $service)
                        <!-- Aquí va tu foreach -->
                        <tr>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->category->name }}</td>
                            <td>{{ $service->description }}</td>
                            <td class="text-end"><strong>USD</strong> {{ $service->price }}</td>
                            <td class="text-center">
                                <a href="{{ route('services.Admin.edit', $service->id) }}"  class="btn btn-sm btn-outline-primary">
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

</div>

</x-layout>