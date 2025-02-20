<nav class="bg-emerald-600 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex items-center">
          <span class="text-2xl font-bold text-gray-800">TodoMarket</span>
        </div>
        <div class="hidden md:flex space-x-6 items-center">
            <a href="{{route('clients')}}" class="space-x-1.5">Listado de clientes</a>
            <a href="{{ url('/dashboard') }}" class="space-x-1.0">Dashboard</a>
          <a href="#" class="text-gray-600 hover:text-gray-900 space-x-1.5">Contacto</a>
        </div>
        <div class="md:hidden flex items-center">
          <button class="text-gray-600 hover:text-gray-900 focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
          </button>
        </div>
      </div>
    </div>
</nav>
  