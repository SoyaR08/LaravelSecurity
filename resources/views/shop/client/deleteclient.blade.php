@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) 
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
@endif

@include('layouts.navbar')

<h1>Eliminar cliente</h1>

<form method="post" action="{{ route("clients.destroy", $client) }}">
    @csrf @method("DELETE")
    @include('shop.client.formfields')
    <button type="submit">Enviar</button>

</form>

<a href="{{ route('clients') }}">Volver Atrás</a>