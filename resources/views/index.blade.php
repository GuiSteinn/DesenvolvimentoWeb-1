<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
</head>
<body>
    <div style="text-align:center;">
        <h1>Inicio</h1>
        <p>Selecione o que você deseja:</p>
    </div>
    <div style="text-align:center;">
        <a href="{{ route('imc') }}" class="btn btn-primary">Calculo do IMC</a><br><br>
        <a href="{{ route('sono') }}" class="btn btn-primary">Qualidade do Sono</a>
    </div>
</body>
</html>