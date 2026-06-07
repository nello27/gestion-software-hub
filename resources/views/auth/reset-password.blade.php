<x-layout meta-title="Restablecer Contraseña">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6"> <div class="card shadow-sm border-0">
                
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">{{ __('Establecer Nueva Contraseña') }}</h4>
                </div>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger mb-4">
                            <ul class="mb-0 small">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
                            <input id="email" 
                                   type="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   name="email" 
                                   value="{{ old('email', $request->email) }}" 
                                   required 
                                   autofocus 
                                   autocomplete="username">
                            
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Nueva Contraseña') }}</label>
                            <input id="password" 
                                   type="password" 
                                   class="form-control @error('password') is-invalid @enderror" 
                                   name="password" 
                                   required 
                                   autocomplete="new-password"
                                   placeholder="Mínimo 8 caracteres">
                            
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label">{{ __('Confirmar Contraseña') }}</label>
                            <input id="password_confirmation" 
                                   type="password" 
                                   class="form-control @error('password_confirmation') is-invalid @enderror" 
                                   name="password_confirmation" 
                                   required 
                                   autocomplete="new-password"
                                   placeholder="Repite la contraseña">
                            
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Restablecer Contraseña') }}
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</x-layout>