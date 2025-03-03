@component('layouts.app')
    

<div>
    <div class="flex flex-col items-center justify-center h-screen">
        <div class="w-full max-w-md rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-white mb-4">Mostrando Cliente</h2>
        
            <form  class="flex flex-col">
                @csrf
                @include("shop.client.formfields")
            
            </form>
            <br>
            <a href="{{ route('clients') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Volver Atrás
            </a>

        </div>
    </div>
    
</div>
@endcomponent




