
# 🚀 Gestión - Plataforma de Servicios de Software & Arquitectura DevOps

Una aplicación web moderna diseñada para la visualización, categorización y cotización dinámica de servicios de ingeniería de software, optimización de infraestructura cloud y soluciones Full Stack.

Este repositorio fue desarrollado con un enfoque especial en **UI/UX limpio (Bootstrap 5)**, **arquitectura modular (Laravel 12)** y **simulación interactiva** ideal para evaluaciones técnicas y revisión de portafolio.

---

## 🛠️ Stack Tecnológico

- **Backend:** PHP 8.2+ & Laravel 12.x (Arquitectura MVC, Blade Components, Eloquent ORM)
- **Frontend:** Bootstrap 5, Custom CSS3 Moderno, Animaciones Nativas
- **Base de Datos:** SQLite / SQL Server / MySQL (Soporte Multi-motor)
- **Librerías Clave:** SweetAlert2 (Notificaciones interactivas nativas)

---

## ✨ Características Destacadas

* **Hero Section Dinámica:** Mockup interactivo que simula un pipeline de CI/CD (Despliegue Continuo con estados en ejecución mediante animaciones CSS puras).
* **Catálogo de Servicios Inteligente:** Grilla responsiva con renderizado dinámico de precios formateados monetariamente y categorización inteligente (*Badges*) automatizada por backend.
* **Simulación de Flujo Libre:** El aplicativo tiene deshabilitada temporalmente la autenticación rígida de forma intencional en las vistas públicas. Esto permite a los entrevistadores y evaluadores probar la experiencia completa de navegación, CRUDs y simulación de cotizaciones sin fricciones de inicio de sesión.
* **Paginación Nativa:** Control de flujo de datos optimizado directo desde base de datos.

---

## 🚀 Instrucciones de Instalación Local

Si deseas clonar este proyecto y ejecutarlo en tu entorno local, sigue estos sencillos pasos:

### 1. Clonar el repositorio e instalar dependencias de PHP
```bash
git clone https://github.com/nello27/Laravel-Blog.git

2. Configurar el archivo de entorno

Copia el archivo de ejemplo para crear tu entorno local:
Bash

cp .env.example .env

3. Inicializar la Base de Datos (SQLite)

Crea el archivo físico para la base de datos local y asegúrate de que tu .env tenga configurado DB_CONNECTION=sqlite.
Bash

# En Windows (PowerShell)
New-Item -Path "database\database.sqlite" -ItemType File

# En Linux / Mac / Git Bash
touch database/database.sqlite

4. Ejecutar Migraciones y Datos de Prueba (Seeders)

Prepara las tablas y carga los 12 servicios de software iniciales automatizados con los seeders:
Bash

php artisan migrate:fresh --seed

5. Generar la clave de la aplicación y arrancar
Bash

php artisan key:generate
php artisan serve

Accede a la aplicación en tu navegador en: http://127.0.0.1:8000
📐 Detalles de Implementación Técnica

    Estructura Limpia: Uso exhaustivo de componentes Blade (<x-layout>) para evitar duplicación de código en el Frontend.

    Optimización de Consultas: Uso eficiente de relaciones Eloquent para mapear los servicios con sus respectivas categorías sin incurrir en el problema de consultas N+1.

    Inyección de Scripts Dinámicos: Captura de eventos de sesión con Blade (@session) combinados con SweetAlert2 para flujos interactivos sutiles y profesionales.

✉️ Contacto / Portafolio

Desarrollado por Nell Yesid Olaya Calderon - Systems Engineer & Software Developer.
