@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) 
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
@endif

@include('layouts.navigation')

<h1>Mostrando Cliente</h1>
<form>
    @csrf
    @include("shop.client.formfields")
</form>

<a href="{{ route('clients') }}">Volver Atrás</a>