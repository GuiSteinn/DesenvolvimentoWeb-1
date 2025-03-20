<!DOCTYPE html>
<html>
<head>
    <title>Qualidade do Sono</title>
</head>
<body>
    @if(!isset($mensagem))
    <div style="text-align:center;">
        <h1>Qualidade do Sono</h1>
        <form action="{{ route('calcular_sono') }}" method="POST">
            @csrf
            <p>Informe sua idade:</p>
            <input min=0 max=100 value="18" type="number" name="idade" step="1" required>
            <p>Informe o número médio de horas dormidas:</p>
            <input min=0 max= 24 value="8" type="number" name="horas" step="1" required><br><br>
            <button type="submit">Calcular</button><br>
        </form>
    </div>
    @endif
    @if(isset($mensagem))
    <div style="text-align:center;">
        <h1>Resultado</h1>
        <p>Como sua idade é {{ $idade }} anos e você dorme {{ $horas }} horas de sono por dia:</p>
        <p><b>{{ $mensagem }}</b></p>
        <a href="{{ route('sono') }}">Calcular Novamente</a>
    </div>
    @endif
    <br><div style="text-align:center;">
        <a href="{{ route('index') }}">Retornar a Página Inicial</a>
    </div>
</body>
</html>