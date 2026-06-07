<x-layout meta-title="Recuperar Contraseña">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6"> <div class="card shadow-sm border-0">
                
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">{{ __('Restablecer Contraseña') }}</h4>
                </div>

                <div class="card-body">
                    
                    <div class="mb-4 text-muted small">
                        {{ __('¿Olvidaste tu contraseña? No hay problema. Simplemente haznos saber tu dirección de correo electrónico y te enviaremos un enlace para restablecerla que te permitirá elegir una nueva.') }}
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success mb-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger mb-4">
                            <ul class="mb-0 small">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
                            <input id="email" 
                                   type="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   name="email" 
                                   value="{{ old('email') }}" 
                                   placeholder="tu@email.com"
                                   required 
                                   autofocus>
                            
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Enviar enlace al correo') }}
                            </button>
                        </div>
                        
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</x-layout>