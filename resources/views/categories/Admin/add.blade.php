<x-layout meta-title="Editar Servicios">

<div class="container-sm py-3 d-flex justify-content-center">
    <div class="card contact-card shadow-sm border-0" style="max-width: 800px; width: 100%;">
        <div class="card-header bg-dark text-white text-center py-2">
            <h3>Agregar Categoría</h3>
        </div>
        <div class="card-body p-4">
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
                <!--@dump($errors->all())-->
                    <form action="{{ route('categories.Admin.store')}}" method="POST">
                        
                        @csrf {{-- Token de seguridad obligatorio en Laravel --}}
                        
                        <!-- Categoría -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Categoría</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="name" 
                                   name="name"
                                   placeholder="Nombre de la categoría" value="{{ old('name') }}">
                        </div>
                        @error('name')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror



                        <!-- Descripción -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Descripción</label>
                            <textarea class="form-control" 
                                      id="description" 
                                      name="description" 
                                      rows="4"
                                      placeholder="Descripción del servicio">{{ old('description') }}</textarea>
                        </div>

                        @error('description')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror



                        <!-- Botones -->
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-secondary">
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-primary">
                            Crear Categoría
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

</x-layout>
