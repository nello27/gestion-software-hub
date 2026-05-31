<x-layout meta-title="Bienvenido a Gestión" meta-description="La herramienta definitiva para el seguimiento de procesos, construida con la potencia de Laravel.">

<style>
.hero-gradient {
    background: linear-gradient(135deg, #0f172a, #1e3a8a);
    color: white;
    padding: 120px 0;
}

/* Efecto hover suave para tus tarjetas */
.custom-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.custom-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 3rem rgba(0,0,0,.125) !important;
}

/* Estilos para las animaciones del Pipeline */
@keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.4; }
}
@keyframes pulse-ring {
    0% { transform: scale(0.33); opacity: 1; }
    80%, 100% { opacity: 0; }
}
.animate-pulse-text {
    animation: blink 1.5s infinite ease-in-out;
}
.pulse-dot {
    position: relative;
    width: 10px;
    height: 10px;
    background-color: #6366f1;
    border-radius: 50%;
}
.pulse-dot::before {
    content: '';
    position: absolute;
    left: -5px;
    top: -5px;
    width: 20px;
    height: 20px;
    border: 2px solid #818cf8;
    border-radius: 50%;
    animation: pulse-ring 1.2s cubic-bezier(0.215, 0.610, 0.355, 1) infinite;
}
</style>

    <header class="hero-gradient">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold mb-4">Impulsa tu Software con DevOps y Arquitectura Moderna</h1>
                    <p class="lead mb-5">Implementamos CI/CD, Dockerización y APIs REST en Laravel para escalar, automatizar y optimizar tus procesos de desarrollo.</p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('services.index') }}" class="btn btn-outline-light btn-lg px-5 fw-semibold rounded-pill">Cotizar mi Proyecto</a>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="p-4 rounded-4 shadow-lg text-start position-relative overflow-hidden" style="background-color: #020617; border: 1px solid #1e293b; font-family: monospace; font-size: 0.8rem; color: #94a3b8;">
                        
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3" style="border-color: #1e293b !important;">
                            <div class="d-flex gap-2">
                                <span class="rounded-circle d-inline-block" style="width: 12px; height: 12px; background-color: #f43f5e;"></span>
                                <span class="rounded-circle d-inline-block" style="width: 12px; height: 12px; background-color: #eab308;"></span>
                                <span class="rounded-circle d-inline-block" style="width: 12px; height: 12px; background-color: #10b981;"></span>
                            </div>
                            <span style="color: #475569; font-size: 0.7rem;">pipeline-deploy.yaml</span>
                        </div>

                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-start gap-3">
                                <svg class="mt-1 flex-shrink-0" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="#10b981" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                <div>
                                    <span style="color: #10b981; font-weight: bold;">[SUCCESS]</span> <span style="color: #f1f5f9;">Lint & Static Analysis</span>
                                    <div style="color: #475569; font-size: 0.75rem;">0 errors, 2 warnings (took 14s)</div>
                                </div>
                            </div>

                            <div class="d-flex align-items-start gap-3">
                                <svg class="mt-1 flex-shrink-0" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="#10b981" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                <div>
                                    <span style="color: #10b981; font-weight: bold;">[SUCCESS]</span> <span style="color: #f1f5f9;">Execute PHPUnit Test Suite</span>
                                    <div style="color: #475569; font-size: 0.75rem;">Passed: 42 tests, 118 assertions (took 28s)</div>
                                </div>
                            </div>

                            <div class="d-flex align-items-start gap-3 p-2 rounded" style="background-color: rgba(30, 41, 59, 0.4); border: 1px solid rgba(99, 102, 241, 0.2);">
                                <div class="mt-1 pt-1 flex-shrink-0">
                                    <div class="pulse-dot"></div>
                                </div>
                                <div>
                                    <span class="animate-pulse-text" style="color: #818cf8; font-weight: bold;">[RUNNING]</span> <span style="color: #c7d2fe; font-weight: 500;">Dockerize & Push to Registry</span>
                                    <div style="color: #64748b; font-size: 0.75rem;">Building image: laravel-app:latest (Layer 4/7)</div>
                                </div>
                            </div>

                            <div class="d-flex align-items-start gap-3" style="opacity: 0.4;">
                                <svg class="mt-1 flex-shrink-0" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="#64748b" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <span style="color: #94a3b8; font-weight: bold;">[PENDING]</span> <span style="color: #cbd5e1;">Kubernetes Blue/Green Deployment</span>
                                </div>
                            </div>
                        </div>

                        <div class="position-absolute" style="bottom: -40px; right: -40px; width: 150px; height: 150px; background-color: rgba(99, 102, 241, 0.08); border-radius: 50%; filter: blur(40px); pointer-events: none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container my-5 py-4" id="features">
        <div class="row text-start">
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 custom-card p-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center rounded-3 mb-4 text-primary" style="width: 48px; height: 48px; background-color: #e0e7ff; color: #4f46e5 !important;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" width="24" height="24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </div>
                        <h5 class="card-title fw-bold text-dark mb-3">Seguimiento en Tiempo Real</h5>
                        <p class="card-text text-muted" style="font-size: 0.95rem; line-height: 1.6;">Monitorea el progreso de tus procesos con actualizaciones instantáneas y notificaciones personalizadas.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 custom-card p-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center rounded-3 mb-4 text-primary" style="width: 48px; height: 48px; background-color: #e0e7ff; color: #4f46e5 !important;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" width="24" height="24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                            </svg>
                        </div>
                        <h5 class="card-title fw-bold text-dark mb-3">Integración Sencilla</h5>
                        <p class="card-text text-muted" style="font-size: 0.95rem; line-height: 1.6;">Conecta fácilmente con tus sistemas existentes gracias a nuestra API RESTful y soporte para webhooks.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 custom-card p-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center rounded-3 mb-4 text-primary" style="width: 48px; height: 48px; background-color: #e0e7ff; color: #4f46e5 !important;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" width="24" height="24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                            </svg>
                        </div>
                        <h5 class="card-title fw-bold text-dark mb-3">Análisis Avanzado</h5>
                        <p class="card-text text-muted" style="font-size: 0.95rem; line-height: 1.6;">Obtén insights valiosos con nuestros paneles de control interactivos y reportes personalizados.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>  

</x-layout>