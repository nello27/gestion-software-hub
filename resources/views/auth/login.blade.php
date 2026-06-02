<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-slate-950 m-0 p-0 antialiased">

    <div class="w-full min-h-screen flex flex-col justify-center items-center px-4 py-12 bg-slate-950">
        <div class="w-full max-w-md bg-slate-900 border border-slate-800 rounded-2xl shadow-2xl p-8 space-y-6">
            
            <div class="text-center">
                <h2 class="text-2xl font-bold text-white tracking-tight">Iniciar Sesión</h2>
                <p class="mt-2 text-xs text-slate-400">Accede a tu panel de gestión y cotizaciones</p>
            </div>

            @if (session('status'))
                <div class="bg-blue-950/40 border border-blue-900 text-blue-400 text-xs p-3 rounded-xl text-center font-medium">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5" autocomplete="off">
                @csrf

                <div class="flex flex-col">
                    <label for="email" class="text-xs font-medium text-slate-300 mb-1.5 text-left">Correo Electrónico</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full px-4 py-2.5 bg-slate-950 border border-slate-800 rounded-xl text-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('email') <p class="mt-1 text-xs text-rose-500 text-left">{{ $message }}</p> @enderror
                </div>

                <div class="flex flex-col">
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="password" class="text-xs font-medium text-slate-300">Contraseña</label>
                        @if (Route::has('password.request'))
                            <a class="text-xs text-blue-400 hover:text-blue-300 hover:underline" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                        @endif
                    </div>
                    <input id="password" type="password" name="password" required class="w-full px-4 py-2.5 bg-slate-950 border border-slate-800 rounded-xl text-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('password') <p class="mt-1 text-xs text-rose-500 text-left">{{ $message }}</p> @enderror
                </div>

                <div class="flex items-center justify-start pt-1">
                    <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                        <input id="remember_me" type="checkbox" name="remember" class="h-4 w-4 rounded border-slate-800 bg-slate-950 text-blue-600">
                        <span class="ms-2 text-xs text-slate-400 select-none">Recordar mi sesión</span>
                    </label>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full flex justify-center py-2.5 px-4 rounded-xl text-sm font-semibold text-white bg-blue-600 hover:bg-blue-500 transition duration-150 cursor-pointer">
                        Entrar al Sistema
                    </button>
                </div>
            </form>

            <div class="text-center border-t border-slate-800/60 pt-4">
                <p class="text-xs text-slate-500">¿No tienes cuenta comercial? <a href="{{ route('register') }}" class="text-blue-400 hover:text-blue-300 hover:underline font-medium">Regístrate aquí</a></p>
            </div>

        </div>
    </div>

    @if (session('registered'))
        <script>
            Swal.fire({
                title: '¡Registro Exitoso!',
                text: "{{ session('registered') }}",
                icon: 'success',
                background: '#0f172a',
                color: '#fff',
                confirmButtonColor: '#2563eb',
                confirmButtonText: 'Entendido'
            });
        </script>
    @endif
    
</body>
</html>