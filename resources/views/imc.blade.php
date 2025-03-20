<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    @if(!isset($imc))
    <div style="text-align:center;">
        <h1>Calculadora de IMC</h1>
        <form action="{{ route('calcular_imc') }}" method="POST">
            @csrf
            <p>Informe seu peso em quilos:</p>
            <input value="80" type="number" name="peso" step="0.1" required>
            <p>Informe sua altura em metros:</p>
            <input value="1.80" type="number" name="altura" step="0.01" required><br><br>
            <button type="submit">Calcular</button><br>
        </form>
    </div>
    @endif
    @if(isset($imc))
    <div style="text-align:center;">
        <h1>Resultado</h1>
        <p>Como seu peso é {{ $peso }}kg e sua altura é {{ $altura }}m, seu IMC é:</p>
        <p><b>{{ $imc }}</b></p>
        <a href="{{ route('imc') }}">Calcular Novamente</a>
    </div>
    @endif
    <br><div style="text-align:center;">
        <a href="{{ route('index') }}">Retornar a Página Inicial</a>
    </div>
</body>
</html>