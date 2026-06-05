<x-layout meta-title="Editar Perfil">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm border-0">
                
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Editar Mi Perfil</h4>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('customer.update') }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="name" 
                                   name="name"
                                   placeholder="Nombre del cliente" 
                                   value="{{ old('name', $customer->name ?? auth()->user()->name) }}">
                        </div>

                        <div class="mb-3">
                            <label for="document" class="form-label">Documento</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="document" 
                                   name="document"
                                   placeholder="Documento del cliente" 
                                   value="{{ old('document', $customer->document ?? auth()->user()->customer->document ?? '') }}">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" 
                                   class="form-control" 
                                   id="email" 
                                   name="email"
                                   placeholder="Email del cliente" 
                                   value="{{ old('email', $customer->user->email ?? auth()->user()->email) }}">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Teléfono</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="phone" 
                                   name="phone"
                                   placeholder="Teléfono del cliente" 
                                   value="{{ old('phone', $customer->phone ?? auth()->user()->customer->phone ?? '') }}">
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Dirección</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="address" 
                                   name="address"
                                   placeholder="Dirección del cliente" 
                                   value="{{ old('address', $customer->address ?? auth()->user()->customer->address ?? '') }}">
                        </div>
                        
                        @if(auth()->user()->role == 'admin')
                        <div class="mb-3">
                            <label for="role" class="form-label">Rol</label>
                            <select class="form-select" id="role" name="role">
                                <option value="customer" {{ (old('role', $customer->user->role ?? '') == 'customer') ? 'selected' : '' }}>Cliente</option>
                                <option value="admin" {{ (old('role', $customer->user->role ?? '') == 'admin') ? 'selected' : '' }}>Administrador</option>
                            </select>
                        </div>
                        @endif

                        <div class="d-flex justify-content-between">
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-primary">
                                Guardar Cambios
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('status'))
    <script>
        Swal.fire({
            title: '¡Buen trabajo!',
            text: "{{ session('status') }}",
            icon: 'success',
            confirmButtonColor: '#212529', // Color oscuro combinado con bg-dark
            confirmButtonText: 'Entendido'
        });
    </script>
@endif

</x-layout>