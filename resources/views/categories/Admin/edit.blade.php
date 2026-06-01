<x-layout meta-title="Editar Servicios">

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm border-0">
                
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Editar Categoría</h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('categories.Admin.update', $category)}}" method="POST">
                        
                        @csrf
                        @method('PATCH')

                        <!-- Categoría -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Categoría</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="name" 
                                   name="name"
                                   placeholder="Nombre de la categoría" value="{{ $category->name }}">
                        </div>



                        <!-- Descripción -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Descripción</label>
                            <textarea class="form-control" 
                                      id="description" 
                                      name="description" 
                                      rows="4"
                                      placeholder="Descripción de la categoría">{{ $category->description }}</textarea>
                        </div>


                        <!-- Botones -->
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-secondary">
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-primary">
                                Actualizar Categoría
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

</x-layout>