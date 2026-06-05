<x-layout meta-title="Admin Servicios">

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

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Listado de Usuarios</h2>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    
                    <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th> Dirección </th>
                            <th>Rol</th>
                            <th class="text-center">Editar</th>
                            <th class="text-center">Borrar</th>
                        </tr>
                    </thead>

                    <tbody>
                        
                        @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->document }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->user->email }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->user->role }}</td>

                            <td class="text-center">
                                <a href="{{ route('customers.Admin.edit', $customer->id) }}" class="btn btn-sm btn-outline-primary">
                                    Editar
                                </a>
                            </td>
                            
                            <td class="text-center">
                                <form action="{{ route('customers.Admin.destroy', $customer->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de borrar este cliente?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if(method_exists($customers, 'links'))
        <div class="p-3">
            {{ $customers->links() }}
        </div>
    @endif
</div>

</x-layout>