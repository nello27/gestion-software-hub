<x-layout meta-title="Blog">
    <!--@dump($posts)-->

    <!--recorrer el array de posts y mostrar cada título-->
    @foreach($posts as $post)
        <p>{{ $post->title }} - {{ $post->description ?? 'Sin descripción' }}</p>
    @endforeach

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="mb-4">Últimas Publicaciones</h2>
                
                <article class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title">Cómo dominar la desestructuración en PHP</h3>
                        <p class="text-muted small">Publicado el 17 de febrero, 2026</p>
                        <p class="card-text">Aprender a extraer datos de arrays de forma eficiente es clave para un código limpio...</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Leer más</a>
                    </div>
                </article>

                <article class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title">Novedades en Laravel 11</h3>
                        <p class="text-muted small">Publicado el 10 de febrero, 2026</p>
                        <p class="card-text">La nueva versión simplifica la estructura de carpetas y mejora el rendimiento...</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Leer más</a>
                    </div>
                </article>
            </div>

            <div class="col-md-4">
                <div class="p-4 mb-3 bg-white rounded shadow-sm">
                    <h4>Buscar</h4>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Escribe aquí...">
                        <button class="btn btn-primary">Ir</button>
                    </div>
                </div>
                <div class="p-4 mb-3 bg-white rounded shadow-sm">
                    <h4>Categorías</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Programación</a></li>
                        <li><a href="#">Tutoriales</a></li>
                        <li><a href="#">Laravel</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-layout>