<x-layout meta-title="Nosotros">
    {{-- Todo lo que pongas aquí adentro se inyectará donde pusiste {{ $slot }} en el layout --}}

    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-4">Nuestra Pasión es el Código</h1>
            <p class="lead">Ayudamos a empresas a automatizar su gestión de cartera con tecnología de punta.</p>
        </div>
    </header>

    <main class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>¿Quiénes somos?</h2>
                <p>Somos un equipo de desarrolladores enfocados en soluciones eficientes. Creemos que el código debe ser legible, escalable y, sobre todo, útil para el usuario final.</p>
                <p>Nuestra experiencia con PHPRunner y Laravel nos permite crear puentes entre sistemas robustos y aplicaciones modernas.</p>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80" class="img-fluid rounded shadow" alt="Equipo trabajando">
            </div>
        </div>

        <hr class="my-5">

        <div class="text-center mb-5">
            <h2>Nuestro Equipo</h2>
        </div>
        
        <div class="row text-center">
            <div class="col-md-4 team-member">
                <img src="https://i.pravatar.cc/150?u=1" class="mb-3" alt="CEO">
                <h5>Nombre del CEO</h5>
                <p class="text-muted">Fundador & Lead Dev</p>
            </div>
            <div class="col-md-4 team-member">
                <img src="https://i.pravatar.cc/150?u=2" class="mb-3" alt="CTO">
                <h5>Nombre del CTO</h5>
                <p class="text-muted">Arquitecto de Software</p>
            </div>
            <div class="col-md-4 team-member">
                <img src="https://i.pravatar.cc/150?u=3" class="mb-3" alt="Diseño">
                <h5>Nombre de Diseño</h5>
                <p class="text-muted">UX/UI Designer</p>
            </div>
        </div>
    </main>

</x-layout>