<x-layout meta-title="Editar Servicios">

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm border-0">
                
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Agregar Servicio</h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('services.Admin.store')}}" method="POST">
                        
                        @csrf
                        
                       
                        <!-- Servicio -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Servicio</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="name" 
                                   name="name"
                                   placeholder="Nombre del servicio" value="">
                        </div>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <!-- Categoría -->

                        <div class="mb-3">
                            <label for="category" class="form-label">Categoría</label>
                            
                        <select class="form-select" id="category" name="category_id">
                            <option value="" disabled>Seleccione una categoría</option>

                            @foreach($categories as $category)
                                <option value="{{ $category->id }}        
                                    ">{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                           
                        </div>

                        <!-- Descripción -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Descripción</label>
                            <textarea class="form-control" 
                                      id="description" 
                                      name="description" 
                                      rows="4"
                                      placeholder="Descripción del servicio"></textarea>
                        </div>

                        <!-- Precio -->
                        <div class="mb-4">
                            <label for="price" class="form-label">Precio</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" 
                                       class="form-control text-end" 
                                       id="price" 
                                       name="price"
                                       placeholder="0.00"
                                       step="0.01" value="">
                            </div>
                        </div>

                        <!-- Botones -->
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-secondary">
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-primary">
                            Crear Servicio
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

</x-layout>