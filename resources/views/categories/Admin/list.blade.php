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
        <h2 class="fw-bold">Listado de categorías</h2>
        <a href="{{ route('categories.Admin.add') }}" class="btn btn-primary">
            + Nueva Categoría
        </a>
    </div>

    <!-- Card contenedora -->
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    
                    <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th class="text-center">Editar</th>
                            <th class="text-center">Borrar</th>
                        </tr>
                    </thead>

                    <tbody>
                        
                        @foreach($categories as $category)
                        <!-- Aquí va tu foreach -->
                  
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td class="text-center">
                                <a href="{{ route('categories.Admin.edit', $category->id) }}"  class="btn btn-sm btn-outline-primary">
                                    Editar
                                </a>
                            </td>
                            <td class="text-center">

                                <form action="{{ route('categories.Admin.destroy', $category->id) }}" method="POST">
                                        @csrf

                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-outline-primary">Borrar</button>

                                </form>
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
                   
                </div>
</div>



</x-layout>
