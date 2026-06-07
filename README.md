# 🚀 Gestión - Plataforma de Servicios de Software & Arquitectura DevOps

Una aplicación web moderna diseñada para la visualización, categorización, gestión y cotización dinámica de servicios de ingeniería de software, optimización de infraestructura cloud y soluciones Full Stack.

Este repositorio fue desarrollado con un enfoque especial en **UI/UX limpio (Bootstrap 5)**, **arquitectura modular (Laravel 12)** y un backend robusto con control de acceso y flujos transaccionales automatizados por correo.

---

## 🛠️ Stack Tecnológico

- **Backend:** PHP 8.2+ & Laravel 12.x (Blade Components, Eloquent ORM, Form Requests)
- **Seguridad & Auth:** Laravel Breeze (Autenticación nativa basada en controladores simples)
- **Manejo de Roles:** Middleware personalizado para control de acceso y seguridad perimetral.
- **Servicio de Correo:** Mailtrap (Entorno de pruebas/sandbox para la validación y depuración de plantillas de correo).
- **Frontend:** Bootstrap 5, Custom CSS3 Moderno, Animaciones Nativas.
- **Base de Datos:** SQLite / SQL Server / MySQL (Soporte Multi-motor).
- **Librerías Clave:** SweetAlert2 (Notificaciones interactivas nativas).

---

## ✨ Características Destacadas

* **Autenticación Estructurada (Breeze):** Flujo completo y seguro de inicio de sesión, registro y recuperación de contraseñas.
* **Control de Acceso basado en Roles (Middleware):** Protección estricta de rutas y vistas. El sistema diferencia dinámicamente entre usuarios autenticados, perfiles de clientes y administradores.
* **Notificaciones por Correo Automatizadas:** Integración de Mailables optimizados con plantillas Markdown personalizadas en español, cubriendo eventos críticos como la recuperación de contraseñas y la confirmación inmediata de solicitudes de servicios.
* **Formularios Dinámicos con UX Inteligente:** El formulario de contacto reconoce si hay una sesión activa, precargando de forma automática y no editable (`readonly`) los datos del usuario (incluyendo información relacional de la tabla `customer`), manteniendo flexibilidad para usuarios invitados y blindaje de seguridad en el backend.
* **Hero Section Dinámica:** Mockup interactivo que simula un pipeline de CI/CD (Despliegue Continuo con estados en ejecución mediante animaciones CSS puras).
* **Catálogo de Servicios Inteligente:** Grilla responsiva con renderizado dinámico de precios formateados monetariamente y categorización inteligente (*Badges*) automatizada por backend.
* **Paginación Nativa:** Control de flujo de datos optimizado directo desde base de datos.

---

## 🚀 Instrucciones de Instalación Local

Si deseas clonar este proyecto y ejecutarlo en tu entorno local, sigue estos sencillos pasos:

### 1. Clonar el repositorio e instalar dependencias de PHP
```bash
git clone https://github.com/nello27/gestion-software-hub.git
cd Laravel-Blog
composer install

2. Configurar el archivo de entorno

Copia el archivo de ejemplo para crear tu entorno local:

cp .env.example .env

💡 Importante: Abre tu archivo .env y configura tus credenciales de Mailtrap en la sección MAIL_* para poder interceptar las notificaciones de reseteo de claves y creación de servicios en tu entorno sandbox. Asegúrate también de contar con APP_LOCALE=es para activar las traducciones.

3. Inicializar la Base de Datos (SQLite)

Crea el archivo físico para la base de datos local y asegúrate de que tu .env tenga configurado DB_CONNECTION=sqlite.

# En Windows (PowerShell)
New-Item -Path "database\database.sqlite" -ItemType File

# En Linux / Mac / Git Bash
touch database/database.sqlite

4. Ejecutar Migraciones, Roles y Datos de Prueba (Seeders)

Prepara las tablas, inyecta la estructura de control de accesos y carga los servicios de software iniciales automatizados con los seeders:

php artisan migrate:fresh --seed

5. Generar la clave de la aplicación y arrancar

php artisan key:generate
php artisan serve

Accede a la aplicación en tu navegador en: http://127.0.0.1:8000
📐 Detalles de Implementación Técnica

    Estructura Limpia: Uso exhaustivo de componentes Blade (<x-layout>) para evitar duplicación de código en el Frontend.

    Asignación Masiva y Validación: Implementación de Form Requests dedicados para aislar las reglas de validación y uso estricto de la propiedad $fillable en los modelos para prevenir vulnerabilidades de asignación masiva.

    Optimización de Consultas: Uso eficiente de relaciones Eloquent para mapear los servicios con sus respectivas categorías sin incurrir en el problema de consultas N+1.

    Inyección de Scripts Dinámicos: Captura de eventos de sesión con Blade (@session) combinados con SweetAlert2 para flujos interactivos sutiles y profesionales.

✉️ Contacto / Portafolio

Desarrollado por Nell Yesid Olaya Calderón - Systems Engineer & Software Developer.

