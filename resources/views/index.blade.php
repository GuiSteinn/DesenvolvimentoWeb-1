<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios</title>
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

        .exercise-options {
            display: flex;
            justify-content: center;
            gap: 20px; /* espaçamento entre os botões */
            margin-top: 30px;
        }

        .exercise-option {
            background-color: #3498db;
            color: white;
            padding: 15px 30px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1.2em;
            transition: background-color 0.3s ease;
            display: inline-block;
        }

        .exercise-option:hover {
            background-color: #2980b9;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            padding: 10px 0;
            margin-top: 30px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <div class="container">
        <header>
            <h1>Bem-vindo ao Calculador de Exercícios!</h1>
            <p>Escolha uma das opções abaixo para começar:</p>
        </header>

        <div class="exercise-options">
            <a href="{{ route('imc') }}" class="exercise-option">Calcular IMC</a>
            <a href="{{ route('sono') }}" class="exercise-option">Avaliar Qualidade do Sono</a>
            <a href="{{ route('viagem') }}" class="exercise-option">Calcular Consumo de Combustível</a>
        </div>

        <footer>
            <p>Desenvolvido por sua equipe de sistemas</p>
        </footer>
    </div>

</body>
</html>
