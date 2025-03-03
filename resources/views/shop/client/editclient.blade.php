
@component('layouts.app')

<div class="bg-gray-200">
    <div class="flex flex-col items-center justify-center h-screen">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Editar Cliente</h2>
        
            <form method="post" action="{{ route("clients.update", $client) }}">
                @csrf @method("PATCH")
                @include('shop.client.formfields')
            
    
                <a href="{{ route('clients') }}" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Volver Atrás
                </a>
                <button type="submit" class="bg-blue-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Enviar
                </button>
            </form>
        
    
            
        </div>
    </div>

</div>
@endcomponent



