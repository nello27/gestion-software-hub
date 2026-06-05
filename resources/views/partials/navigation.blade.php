<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top py-3">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="https://logospng.org/download/laravel/logo-laravel-icon-1024.png" 
                alt="Logo" 
                class="me-2"
                style="height: 40px;">
            <span class="fw-bold text-uppercase text-white fs-5">
                GESTIÓN
            </span>
        </a>

        <!-- Botón responsive -->
        <button class="navbar-toggler border-0" type="button" 
                data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" 
                       href="#" 
                       id="navbarDropdown" 
                       role="button" 
                       data-bs-toggle="dropdown">
                        Area Admin
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                        <li>
                         <a class="dropdown-item" href="{{ route('services.Admin.list') }}">Admin Servicios</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route("request.Admin.list") }}">Cotizaciones</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('categories.Admin.list') }}">Categorías</a></li>
                        <li><a class="dropdown-item" href="{{ route('customers.Admin.list') }}">Usuarios</a></li>
                        <li><a class="dropdown-item" href="#">Otra Opción "En desarrollo"</a></li>
                    </ul>
                </li>



                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('services.index') }}">
                        Servicios
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('customer.edit') }}">
                        Perfil
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('about') }}">
                        Nosotros
                    </a>
                </li>


                @auth
                    
                <div class="d-flex align-items-center gap-3"></div>            
                        <span class="text-white bg-dark border border-secondary px-3 py-1.5 rounded text-sm">
                            <span class="text-white font-weight-normal">Bienvenido,</span> {{ auth()->user()->name }}
                        </span>

                        <form method="POST" action="{{ route('logout') }}" class="m-0 p-0">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm px-3 font-weight-bold cursor-pointer">
                                Cerrar Sesión
                            </button>
                        </form>

                </div>
                @endauth
                <div class="flex items-center space-x-4">

                @guest
                    <a href="{{ route('login') }}" 
                    class="text-sm font-medium text-slate-300 hover:text-white transition focus:outline-none">
                        Iniciar Sesión
                    </a>
                    
                    <a href="{{ route('register') }}" 
                    class="text-sm font-semibold text-white bg-blue-600 hover:bg-blue-500 px-4 py-1.5 rounded-xl shadow transition duration-150 text-center">
                        Registrarse
                    </a>
                @endguest

            </div>

            </ul>
        </div>
    </div>
</nav>

