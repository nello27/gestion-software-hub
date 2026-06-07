<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail; // 👈 Recuerda importar la fachada Mail aquí arriba

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// 🚀 Agrega tu comando de prueba aquí abajo:
Artisan::command('send-mail', function () {
    
    Mail::raw('¡Felicidades! Tu conexión SMTP con Mailtrap funciona de manera perfecta.', function ($message) {
        $message->from('hello@demomailtrap.co', 'Mailtrap Test')
                ->to('yesid.olaya@gmail.com')
                ->subject('¡Conexión Exitosa!');
    });

    $this->info('El correo de prueba ha sido enviado a Mailtrap con éxito.');
    
})->purpose('Enviar un correo de prueba rápido a través de Mailtrap');