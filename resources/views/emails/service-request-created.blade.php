<h2>Hola {{ $serviceRequest->name }}</h2>

<p>Hemos recibido tu solicitud correctamente.</p>

<p><strong>Servicio:</strong> {{ $serviceRequest->service->name }}</p>

<p><strong>Mensaje:</strong> {{ $serviceRequest->message }}</p>

<p>Te estaremos contactando pronto al número {{ $serviceRequest->phone }}.</p>