<x-layout meta-title="Nosotros">

<style>
/* Encabezado con la misma identidad visual del Home */
.about-hero {
    background: linear-gradient(135deg, #0f172a, #1e3a8a);
    color: white;
    padding: 80px 0;
}

/* Estilo para las imágenes del equipo (Avatar circular moderno) */
.team-avatar {
    width: 130px;
    height: 130px;
    object-fit: cover;
    border: 4px solid #f1f5f9;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, border-color 0.3s ease;
}

.team-card:hover .team-avatar {
    transform: scale(1.05);
    border-color: #3b82f6; /* Cambio a azul interactivo al pasar el mouse */
}

/* Tarjetas sutiles para los miembros del equipo */
.team-card {
    padding: 2rem 1rem;
    border-radius: 12px;
    background-color: #ffffff;
    transition: background-color 0.3s ease;
}
.team-card:hover {
    background-color: #f8fafc;
}
</style>

    <header class="about-hero text-center">
        <div class="container">
            <h1 class="display-5 fw-bold mb-3">Nuestra Pasión es el Código</h1>
            <p class="lead opacity-75 max-w-2xl mx-auto" style="max-width: 700px;">
                Ayudamos a empresas a escalar sus operaciones y automatizar procesos con tecnología de punta.
            </p>
        </div>
    </header>

    <main class="container my-5 py-3">
        <div class="row align-items-center g-5 mb-5">
            <div class="col-md-6">
                <div class="pe-md-4">
                    <span class="text-uppercase fw-bold text-primary tracking-wider" style="font-size: 0.8rem; letter-spacing: 1.5px;">Trayectoria e Ingeniería</span>
                    <h2 class="fw-bold text-dark mt-2 mb-4" style="font-size: 2.25rem;">¿Quiénes somos?</h2>
                    <p class="text-muted leading-relaxed mb-3" style="font-size: 1.05rem;">
                        Somos un equipo de desarrolladores enfocados en soluciones eficientes. Creemos firmemente que el código debe ser legible, escalable y, sobre todo, útil para el usuario final.
                    </p>
                    <p class="text-muted leading-relaxed">
                        Nuestra experiencia con arquitecturas robustas y entornos modernos como <strong>Laravel</strong> nos permite crear puentes perfectos entre sistemas empresariales avanzados y aplicaciones web ágiles de última generación.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80" class="img-fluid rounded-4 shadow-lg" alt="Equipo trabajando en software">
                    <div class="position-absolute translate-middle-y start-0" style="z-index: -1; width: 100px; height: 100px; background-color: rgba(59, 130, 246, 0.1); filter: blur(30px);"></div>
                </div>
            </div>
        </div>

        <hr class="my-5 opacity-25">

        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold text-primary tracking-wider" style="font-size: 0.8rem; letter-spacing: 1.5px;">Mentes detrás del Proyecto</span>
            <h2 class="fw-bold text-dark mt-2">Nuestro Equipo</h2>
        </div>
        
        <div class="row g-4 text-center justify-content-center">
            
            <div class="col-sm-6 col-md-4">
                <div class="team-card h-100">
                    <img src="https://i.pravatar.cc/150?u=1" class="rounded-circle team-avatar mb-4" alt="Lead Developer">
                    <h5 class="fw-bold text-dark mb-1">Nombre del CEO</h5>
                    <p class="text-primary fw-semibold small mb-2">Fundador & Lead Dev</p>
                    <p class="text-muted small px-3">Especialista en backend, lógica de negocios y optimización de bases de datos.</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="team-card h-100">
                    <img src="https://i.pravatar.cc/150?u=2" class="rounded-circle team-avatar mb-4" alt="Arquitecto de Software">
                    <h5 class="fw-bold text-dark mb-1">Nombre del CTO</h5>
                    <p class="text-primary fw-semibold small mb-2">Arquitecto de Software</p>
                    <p class="text-muted small px-3">Encargado de la infraestructura cloud, despliegues DevOps y pipelines de CI/CD.</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="team-card h-100">
                    <img src="https://i.pravatar.cc/150?u=3" class="rounded-circle team-avatar mb-4" alt="Diseñador UX/UI">
                    <h5 class="fw-bold text-dark mb-1">Nombre de Diseño</h5>
                    <p class="text-primary fw-semibold small mb-2">UX/UI Designer</p>
                    <p class="text-muted small px-3">Responsable de maquetación interactiva y de crear experiencias visuales fluidas.</p>
                </div>
            </div>

        </div>
    </main>

</x-layout>