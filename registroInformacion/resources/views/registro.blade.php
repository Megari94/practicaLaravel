<form action="{{ route('registro.result') }}" method="POST">
    @csrf
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" required><br><br>
    <label for="name">Telefono</label>
    <input type="text" name="telefono" id="telefono" required><br><br>
    <label for="name">DNI</label>
    <input type="text" name="dni" id="dni" required><br><br>

    <button type="submit">Mostrar Registro</button>
</form>

@if(isset($registros)&&count($registros)>0)
    <h3>Datos almacenados</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>DNI</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $registro)
                <tr>
                    <td>{{$registro['name']}}</td>
                    <td>{{$registro['telefono']}}</td>
                    <td>{{$registro['dni']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif