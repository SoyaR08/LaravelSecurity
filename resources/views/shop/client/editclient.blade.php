@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) 
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
@endif

@include('layouts.navigation')



<div class="flex flex-col items-center justify-center h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Editar Cliente</h2>
    
        <form method="post" action="{{ route("clients.update", $client) }}" class="flex flex-col">
            @csrf @method("PATCH")
            @include('shop.client.formfields')
            <button type="submit">Enviar</button>
        
        </form>
    
        <a href="{{ route('clients') }}">Volver Atrás</a>
    </div>
</div>



