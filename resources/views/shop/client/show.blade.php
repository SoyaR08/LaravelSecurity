<form>
    @csrf
    <div>
        <label for="name">Nombre: </label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="surname">Apellido: </label>
        <input type="text" name="surname" id="surname">
    </div>

    <div>
        <label for="phone">Teléfono: </label>
        <input type="text" name="phone" id="phone">
    </div>

    <div>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" value="{{$client->email}}">
    </div>

    

</form>