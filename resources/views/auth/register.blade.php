<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-950 m-0 p-0 antialiased">

    <div class="w-full min-h-screen flex flex-col justify-center items-center px-4 py-12 bg-slate-950">
        <div class="w-full max-w-md bg-slate-900 border border-slate-800 rounded-2xl shadow-2xl p-8 space-y-6">
            
            <div class="text-center">
                <h2 class="text-2xl font-bold text-white tracking-tight">Crear Cuenta</h2>
                <p class="mt-2 text-xs text-slate-400">Regístrate para acceder al panel de gestión</p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-4" autocomplete="off">
                @csrf

                <div class="flex flex-col">
                    <label for="name" class="text-xs font-medium text-slate-300 mb-1.5 text-left">Nombre Completo</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus class="w-full px-4 py-2.5 bg-slate-950 border border-slate-800 rounded-xl text-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('name') <p class="mt-1 text-xs text-rose-500 text-left">{{ $message }}</p> @enderror
                </div>

                <div class="flex flex-col">
                    <label for="email" class="text-xs font-medium text-slate-300 mb-1.5 text-left">Correo Electrónico</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-2.5 bg-slate-950 border border-slate-800 rounded-xl text-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('email') <p class="mt-1 text-xs text-rose-500 text-left">{{ $message }}</p> @enderror
                </div>

                <div class="flex flex-col">
                    <label for="password" class="text-xs font-medium text-slate-300 mb-1.5 text-left">Contraseña</label>
                    <input id="password" type="password" name="password" required class="w-full px-4 py-2.5 bg-slate-950 border border-slate-800 rounded-xl text-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('password') <p class="mt-1 text-xs text-rose-500 text-left">{{ $message }}</p> @enderror
                </div>

                <div class="flex flex-col">
                    <label for="password_confirmation" class="text-xs font-medium text-slate-300 mb-1.5 text-left">Confirmar Contraseña</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required class="w-full px-4 py-2.5 bg-slate-950 border border-slate-800 rounded-xl text-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="pt-3">
                    <button type="submit" class="w-full flex justify-center py-2.5 px-4 rounded-xl text-sm font-semibold text-white bg-blue-600 hover:bg-blue-500 transition duration-150 cursor-pointer">
                        Registrar Cuenta
                    </button>
                </div>
            </form>

            <div class="text-center border-t border-slate-800/60 pt-4">
                <p class="text-xs text-slate-500">¿Ya estás registrado? <a href="{{ route('login') }}" class="text-blue-400 hover:text-blue-300 hover:underline font-medium">Inicia sesión aquí</a></p>
            </div>

        </div>
    </div>

</body>
</html>