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
                        <li><a class="dropdown-item" href="#">Otra Opción "En desarrollo"</a></li>
                    </ul>
                </li>



                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('services.index') }}">
                        Servicios
                    </a>
                </li>

                <!--<li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('posts.index') }}">
                        Blog
                    </a>
                </li>-->

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('about') }}">
                        Nosotros
                    </a>
                </li>

                <!-- CTA -->
                <!--<li class="nav-item ms-lg-3">
                    <a class="btn btn-primary px-4 rounded-pill fw-semibold"
                       href="{{ route('contact') }}">
                        Contacto
                    </a>
                </li>-->

            </ul>
        </div>
    </div>
</nav>

