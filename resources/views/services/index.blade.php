<x-layout meta-title="Servicios">

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

<section class="container py-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold">Nuestros Servicios</h1>
        <p class="text-muted">
            Soluciones profesionales de desarrollo Full Stack adaptadas a tu negocio.
        </p>
    </div>

   
        
    
    <div class="row g-4">

         @foreach($services as $service)
        <!-- Card Servicio -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0">

                <div class="card-body d-flex flex-column">

                    <h5 class="card-title fw-bold">
                        {{ $service->name }}
                    </h5>

                    <span class="badge bg-primary mb-3 align-self-start">
                        {{ $service->category->name }}
                    </span>

                    <p class="card-text text-muted">
                        {{ $service->description }}
                    </p>

                    <div class="mt-auto">

                        <h4 class="fw-bold text-dark">
                            $USD  {{ $service->price }}
                        </h4>

                        <a href="{{ route('services.show', $service->id) }}" 
                        class="btn btn-dark w-100 mt-3">
                            Solicitar Cotización
                        </a>

                    </div>

                </div>

            </div>
        </div>

        <!-- Fin Card -->
    
        @endforeach

                            <!--Importante para paginación-->
                <div class="p-3">
                    {{ $services->links('pagination::bootstrap-5') }}
                </div>
    </div>
    
</section>

</x-layout>