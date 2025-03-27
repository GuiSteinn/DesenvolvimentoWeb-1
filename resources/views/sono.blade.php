<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qualidade do Sono</title>
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
            <h1>Qualidade do Sono</h1>
            <p>Informe os dados para avaliar a qualidade do seu sono.</p>
        </header>

        @if(!isset($mensagem))
        <div class="form-container">
            <form action="{{ route('calcular_sono') }}" method="POST">
                @csrf
                <p>Informe sua idade:</p>
                <input min=0 max=100 value="18" type="number" name="idade" step="1" required>
                <p>Informe o número médio de horas dormidas:</p>
                <input min=0 max=24 value="8" type="number" name="horas" step="1" required><br><br>
                <button type="submit">Calcular</button><br>
            </form>
        </div>
        @endif

        @if(isset($mensagem))
        <div class="result-container">
            <h1>Resultado</h1>
            <p>Como sua idade é {{ $idade }} anos e você dorme {{ $horas }} horas por dia, a avaliação do seu sono é:</p>
            <p><b>{{ $mensagem }}</b></p>
            <a href="{{ route('sono') }}">Calcular Novamente</a>
        </div>
        @endif

        <footer>
            <a href="{{ route('index') }}">Retornar à Página Inicial</a>
        </footer>
    </div>

</body>
</html>
