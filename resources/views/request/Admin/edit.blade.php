<x-layout meta-title="Editar Servicios">

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm border-0">
                
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Editar Cotización</h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('services.Admin.update', $service)}}" method="POST">
                        
                        @csrf
                        @method('PATCH')

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="name" 
                                   name="name"
                                   placeholder="Nombre del servicio" value="{{ $service->name }}">
                        </div>

                        <!-- Email -->

                                            
                        <div class="mb-3">
                            <label for="description" class="form-label">Email</label>
                            <textarea class="form-control" 
                                      id="description" 
                                      name="description" 
                                      rows="4"
                                      placeholder="Descripción del servicio">{{ $service->email }}</textarea>
                        </div>

                        
                        <div class="mb-3">
                            <label for="description" class="form-label">Télefono</label>
                            <textarea class="form-control" 
                                      id="description" 
                                      name="description" 
                                      rows="4"
                                      placeholder="Descripción del servicio">{{ $service->email }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Servicio</label>
                            
                        <select class="form-select" id="category" name="category_id">
                            <option value="" disabled>Seleccione un Servicio</option>

                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id', $service->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                           
                        </div>

                        <!-- Mensaje -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Mensaje</label>
                            <textarea class="form-control" 
                                      id="description" 
                                      name="description" 
                                      rows="4"
                                      placeholder="Descripción del servicio">{{ $service->message }}</textarea>
                        </div>

                        <!-- Precio -->
                        <div class="mb-4">
                            <label for="price" class="form-label">Estado</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" 
                                       class="form-control text-end" 
                                       id="price" 
                                       name="price"
                                       placeholder="0.00"
                                       step="0.01" value="{{ $service->status }}">
                            </div>
                        </div>

                        <!-- Botones -->
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-secondary">
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-primary">
                                Actualizar Cotización
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

</x-layout>