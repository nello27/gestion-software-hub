<x-layout meta-title="Servicios">

<style>
/* Tarjeta de servicio con elevación y transición suave */
.custom-service-card {
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    background-color: #ffffff;
}
.custom-service-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08) !important;
}

/* Botón interactivo premium */
.btn-custom-action {
    background-color: #1e293b;
    color: #ffffff;
    border: 1px solid #1e293b;
    transition: all 0.2s ease;
}
.btn-custom-action:hover {
    background-color: #0f172a;
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(15, 23, 42, 0.15);
}

/* Estilos personalizados para badges limpios */
.badge-devops { background-color: #eff6ff; color: #1d4ed8; font-weight: 700; }
.badge-frontend { background-color: #fdf2f8; color: #b91c1c; font-weight: 700; }
.badge-backend { background-color: #f0fdf4; color: #15803d; font-weight: 700; }
.badge-default { background-color: #f8fafc; color: #475569; font-weight: 700; }
</style>

@session('status')
    <script>
        Swal.fire({
            title: '¡Operación Exitosa!',
            text: "{{ session('status') }}",
            icon: 'success',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#3085d6',
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
        
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0 custom-service-card">

                <div class="card-body d-flex flex-column p-4">

                    @if($service->id != '13' && isset($service->category))
                        <div class="mb-3">
                            @php
                                $catName = strtolower($service->category->name);
                                $badgeClass = 'badge-default';
                                
                                if (str_contains($catName, 'devops')) {
                                    $badgeClass = 'badge-devops';
                                } elseif (str_contains($catName, 'front')) {
                                    $badgeClass = 'badge-frontend';
                                } elseif (str_contains($catName, 'back') || str_contains($catName, 'sql') || str_contains($catName, 'rest')) {
                                    $badgeClass = 'badge-backend';
                                }
                            @endphp
                            <span class="badge rounded-pill px-3 py-2 text-uppercase {{ $badgeClass }}" style="font-size: 0.7rem; letter-spacing: 0.5px;">
                                {{ $service->category->name }}
                            </span>
                        </div>
                    @endif

                    <h5 class="card-title fw-bold text-dark mb-2" style="font-size: 1.2rem;">
                        {{ $service->name }}
                    </h5>
                    
                    <p class="card-text text-muted flex-grow-1" style="font-size: 0.9rem; line-height: 1.5;">
                        {{ $service->description }}
                    </p>

                    <div class="mt-4">

                        @if($service->id != '13')
                            <span class="text-secondary small fw-semibold d-block text-uppercase" style="font-size: 0.7rem; letter-spacing: 1px; margin-bottom: 2px;">Inversión Estimada</span>
                            <h4 class="fw-black text-dark m-0" style="font-size: 1.65rem; font-weight: 800; letter-spacing: -0.5px;">
                                $USD {{ number_format($service->price, 0, '.', ',') }}
                            </h4>
                        @endif
                        
                        <a href="{{ route('services.show', $service->id) }}" 
                           class="btn btn-custom-action w-100 mt-3 py-2.5 fw-semibold rounded-3">
                            Solicitar Cotización
                        </a>

                    </div>

                </div>

            </div>
        </div>
        @endforeach

        <div class="col-12 pt-4 d-flex justify-content-end">
            {{ $services->links('pagination::bootstrap-5') }}
        </div>
    </div>
    
</section>

</x-layout>