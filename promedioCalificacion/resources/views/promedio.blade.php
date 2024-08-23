
<form action="{{ route('promedio.result') }}" method="POST">
    @csrf
    <label for="number1">Examen 1:</label>
    <input type="number" id="number1" name="number1" required><br><br>
    
    <label for="number2">Examen 2:</label>
    <input type="number" id="number2" name="number2" required><br><br>

    <label for="number2">Examen 3:</label>
    <input type="number" id="number2" name="number3" required><br><br>
    
    

    <button type="submit">Calcular</button>
</form>

@if(isset($promedio))
    <h2>Promedio: {{ $promedio }}</h2>
@endif