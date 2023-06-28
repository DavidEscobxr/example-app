
<h1>Crear producto</h1>
<form action="{{route('productos.store')}}" method="POST">

    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        descripcion:
        <br>
        <input type="text" name="descripcion">
    </label>
    <label>
        precio:
        <br>
        <input type="text" name="precio">
    </label>
    <label>
        existencias:
        <br>
        <input type="number" name="existencias">

    </label>
    <label>
        proveedor:
        <br>
        <input type="text" name="proveedor">
    </label>


    <br><br>
    <button type="submit">Enviar Formulario:</button>

</form>