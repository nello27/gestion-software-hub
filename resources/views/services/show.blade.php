<x-layout meta-title="Contactenos" >

<div class="container">
    <div class="card contact-card">
        <div class="card-header bg-primary text-white text-center py-4">
            <h3>Contacta con {{ $nombre ?? 'nuestro equipo' }}</h3>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('services_request.store') }}" method="POST">
                @csrf {{-- Token de seguridad obligatorio en Laravel --}}
                
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ej: Juan Pérez">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $correo ?? '' }}" placeholder="nombre@ejemplo.com">
                </div>

                <div class="mb-3">
                <label for="phone" class="form-label">Télefono</label>
                    <input type="phone" class="form-control" id="phone" name="phone" value="{{ $telefono ?? '' }}" placeholder="+57 777 777">
                </div>


                
                <div class="mb-3">
                    <input type="hidden" name="service_id" value="{{ $services->id }}">
                    <strong for="email" class="form-label">Servicio seleccionado: {{ $services->name }}</strong>                    
                </div>
                <div class="mb-3">
                    <strong for="email" class="form-label">Precio inicial: $USD {{ $services->price }}</strong>                    
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="¿En qué podemos ayudarte?"></textarea>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Enviar Mensaje</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-center text-muted">
            &copy; {{ date('Y') }} - Gestión
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</x-layout>