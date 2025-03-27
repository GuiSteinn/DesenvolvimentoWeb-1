<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
            border-radius: 8px;
        }

        h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .form-container {
            margin-top: 30px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container input {
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 50%;
        }

        .form-container button {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #2980b9;
        }

        .result-container {
            margin-top: 30px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #2c3e50;
            color: white;
            padding: 10px 0;
            margin-top: 30px;
            border-radius: 8px;
        }

        a {
            color: #3498db;
            text-decoration: none;
            font-size: 1.1em;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <header>
            <h1>Calculadora de IMC</h1>
            <p>Informe seus dados para calcular o Índice de Massa Corporal (IMC).</p>
        </header>

        @if(!isset($imc))
        <div class="form-container">
            <form action="{{ route('calcular_imc') }}" method="POST">
                @csrf
                <p>Informe seu peso em quilos:</p>
                <input min="1" value="80" type="number" name="peso" step="0.1" required>
                <p>Informe sua altura em metros:</p>
                <input min="0.1" value="1.80" type="number" name="altura" step="0.01" required><br><br>
                <button type="submit">Calcular</button><br>
            </form>
        </div>
        @endif

        @if(isset($imc))
        <div class="result-container">
            <h1>Resultado</h1>
            <p>Com seu peso de {{ $peso }}kg e sua altura de {{ $altura }}m, o seu IMC é:</p>
            <p><b>{{ $imc }}</b></p>
            <p><b>{{ $mensagem }}</b></p>
            <a href="{{ route('imc') }}">Calcular Novamente</a>
        </div>
        @endif

        <footer>
            <a href="{{ route('index') }}">Retornar à Página Inicial</a>
        </footer>
    </div>

</body>
</html>
