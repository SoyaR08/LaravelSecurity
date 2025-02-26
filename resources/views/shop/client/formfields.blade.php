<div>
    <label for="name" class="block text-gray-800 font-semibold text-sm"
      >Nombre: </label
    >
    <div class="mt-2">
      <input
        type="text"
        name="name"
        id="name"
        value="{{old('title', $client->name)}}"
        class="block w-56 rounded-md py-1.5 px-2 ring-1 ring-inset ring-gray-400 focus:text-gray-800"
      />
    </div>
    <label class="pt-1 block text-gray-500 text-sm">Introduzca su nombre</label>
</div>

<div>
    <label for="surname" class="block text-gray-800 font-semibold text-sm"
      >Apellido: </label
    >
    <div class="mt-2">
      <input
        type="text"
        name="surname"
        id="surname"
        value="{{old('title', $client->surname)}}"
        class="block w-56 rounded-md py-1.5 px-2 ring-1 ring-inset ring-gray-400 focus:text-gray-800"
      />
    </div>
    <label class="pt-1 block text-gray-500 text-sm">Introduzca su apellido</label>
</div>      


<div>
    <label for="surname" class="block text-gray-800 font-semibold text-sm"
      >Teléfono: </label
    >
    <div class="mt-2">
      <input
        type="text"
        name="phone"
        id="phone"
        value="{{old('title', $client->phone)}}"
        class="block w-56 rounded-md py-1.5 px-2 ring-1 ring-inset ring-gray-400 focus:text-gray-800"
      />
    </div>
    <label class="pt-1 block text-gray-500 text-sm">Introduzca su teléfono</label>
</div>      

<div>
    <label for="surname" class="block text-gray-800 font-semibold text-sm"
      >Correo Electrónico: </label
    >
    <div class="mt-2">
      <input
        type="email"
        name="email"
        id="email"
        value="{{old('title', $client->email)}}"
        class="block w-56 rounded-md py-1.5 px-2 ring-1 ring-inset ring-gray-400 focus:text-gray-800"
      />
    </div>
    <label class="pt-1 block text-gray-500 text-sm">Introduzca su correo electrónico</label>
</div>      



