{{-- 
    Si desde el controlador hiciste: 
    ['nombre' => $user, 'email' => $mail] = $data; 
--}}

<x-layout meta-title="Contactenos" >

<div class="container-sm py-3 d-flex justify-content-center">
    <div class="card contact-card shadow-sm border-0" style="max-width: 800px; width: 100%;">
        <div class="card-header bg-dark text-white text-center py-2">
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
                    <label for="phone" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $correo ?? '' }}" placeholder="nombre@ejemplo.com">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="¿En qué podemos ayudarte?"></textarea>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-dark btn-lg">Enviar Mensaje</button>
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