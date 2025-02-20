@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) 
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
@endif

@include('layouts.navbar')


<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="overflow-x-auto w-full max-w-4xl">
      <table class="w-full border-collapse bg-white rounded-lg shadow-md overflow-hidden text-center">
        <thead class="bg-blue-500">
          <tr>
            <th class="px-6 py-3  text-sm font-medium uppercase">Nombre</th>
            <th class="px-6 py-3  text-sm font-medium uppercase">Acciones</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          @foreach ($clients as $client)
            <tr class="hover:bg-gray-100 transition-colors">
              <td class="px-6 py-4"><a href="{{ route('clients.show', $client['id']) }}">{{$client['name']}}</a></td>
              <td class="px-6 py-4">
                <button class="text-blue-500 hover:text-blue-700">Editar</button>
                <button class="text-red-500 hover:text-red-700 ml-4">Eliminar</button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  
  





<a href="{{ route('clients.add') }}">Añadir cliente</a>

