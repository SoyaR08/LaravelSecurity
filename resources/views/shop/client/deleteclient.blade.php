@component('layouts.app')

<div class="">
    <div class="flex flex-col items-center justify-center h-screen">
        <div class="w-full max-w-md  rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-white mb-4">Eliminar cliente</h2>
        
            <form method="post" action="{{ route("clients.destroy", $client) }}">
                @csrf @method("DELETE")
                @include('shop.client.formfields')
                <br>
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






