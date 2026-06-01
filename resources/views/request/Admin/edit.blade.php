<x-layout meta-title="Editar Servicios">

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm border-0">
                
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Editar Cotización</h4>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                        <div style="background-color: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 4px;">
                            <strong>¡Errores de validación!:</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('request.Admin.update', $service_request) }}">
                        @csrf
                        @method('PATCH')

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="name" 
                                   name="name"
                                   placeholder="Nombre del servicio" value="{{ $service_request->name }}">
                        </div>

                        <!-- Email -->

                                            
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" 
                                   class="form-control" 
                                   id="email" 
                                   name="email" 
                                   placeholder="Email" 
                                   value="{{ $service_request->email }}">
                        </div>

                        
                        <div class="mb-3">
                            <label for="phone" class="form-label">Télefono</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="phone" 
                                   name="phone" 
                                   placeholder="Télefono" 
                                   value="{{ $service_request->phone }}">
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Servicio</label>
                            
                        <select class="form-select" id="category" name="category_id">
                            <option value="" disabled>Seleccione un Servicio</option>

                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id', $service_request->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                           
                        </div>

                        <!-- Mensaje -->
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensaje</label>
                            <textarea class="form-control" 
                                      id="message" 
                                      name="message" 
                                      rows="4"
                                      placeholder="Descripción del servicio">{{ $service_request->message }}</textarea>
                        </div>

                        <!-- Estado -->
                        <div class="mb-4">
                            <label for="status" class="form-label">Estado</label>
                            <div class="input-group">
                                <input type="text" 
                                       class="form-control text-end" 
                                       id="status" 
                                       name="status"
                                       placeholder="Estado"
                                       value="{{ $service_request->status }}">
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