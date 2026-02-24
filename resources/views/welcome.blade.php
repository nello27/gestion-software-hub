<x-layout meta-title="Bienvenido a Gestión" meta-description="La herramienta definitiva para el seguimiento de procesos, construida con la potencia de Laravel." >

    <header class="hero-gradient">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-3 fw-bold mb-4">Automatiza tus procesos con Inteligencia</h1>
                    <p class="lead mb-5">La herramienta definitiva para el seguimiento de procesos, construida con la potencia de Laravel.</p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('posts.index') }}" class="btn btn-light btn-lg px-5 fw-bold">Ver Blog</a>
                        <a href="#features" class="border-t-neutral-500 btn btn-outline-light btn-lg px-5 fw-bold">Características</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894614e1c8e?auto=format&fit=crop&w=800&q=80" class="img-fluid rounded shadow" alt="Automatización">
                </div>
            </div>
        </div>
    </header>

    <div class="container my-5" id="features">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Seguimiento en Tiempo Real</h5>
                        <p class="card-text">Monitorea el progreso de tus procesos con actualizaciones instantáneas y notificaciones personalizadas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100  shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Integración Sencilla</h5>
                        <p class="card-text">Conecta fácilmente con tus sistemas existentes gracias a nuestra API

                        RESTful y soporte para webhooks.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Análisis Avanzado</h5>
                        <p class="card-text">Obtén insights valiosos con nuestros paneles de control interactivos y reportes personalizados.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>  

</x-layout>
