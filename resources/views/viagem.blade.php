<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Consumo de Combustível</title>
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

        .form-container select, .form-container input, .form-container button {
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 50%;
        }

        .form-container button {
            background-color: #3498db;
            color: white;
            border: none;
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
    <script>
        function atualizarValorPorLitro() {
            const combustivel = document.getElementById('combustivel').value;
            const valorLitroInput = document.getElementById('valor_litro');

            if (combustivel === 'Gasolina') {
                valorLitroInput.value = 6.29;
                valorLitroInput.readOnly = true;
            } else if (combustivel === 'Álcool') {
                valorLitroInput.value = 5.18;
                valorLitroInput.readOnly = true;
            } else if (combustivel === 'Diesel') {
                valorLitroInput.value = 6.59;
                valorLitroInput.readOnly = true;
            } else {
                valorLitroInput.value = '';
                valorLitroInput.readOnly = false;
            }
        }
    </script>
</head>
<body>

    <div class="container">
        <header>
            <h1>Calculadora de Consumo de Combustível</h1>
            <p>Informe os dados abaixo para calcular o custo da viagem.</p>
        </header>

        @if(!isset($resultado))
        <div class="form-container">
            <form action="{{ route('calcular_viagem') }}" method="POST">
                @csrf
                <p>Selecione o combustível:</p>
                <select id="combustivel" name="combustivel" onchange="atualizarValorPorLitro()" required>
                    <option value="" disabled selected>Selecione o combustível</option>
                    <option value="Gasolina">Gasolina</option>
                    <option value="Álcool">Álcool</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Outros">Outros</option>
                </select><br><br>

                <p>Valor por Litro:</p>
                <input id="valor_litro" type="number" name="valor_litro" step="0.01" required><br><br>

                <p>Distância a ser percorrida (km):</p>
                <input type="number" name="distancia" step="0.01" required><br><br>

                <p>Consumo do veículo (km/l):</p>
                <input type="number" name="consumo" step="0.01" required><br><br>

                <button type="submit">Calcular</button><br>
            </form>
        </div>
        @endif

        @if(isset($resultado))
        <div class="result-container">
            <h1>Resultado</h1>
            <p>{{ $resultado }}</p>
            <p><b>Distância:</b> {{ $distancia }} km</p>
            <p><b>Consumo do veículo:</b> {{ $consumo }} km/l</p>
            <p><b>Valor por litro:</b> R$ {{ number_format($valor_litro, 2, ',', '.') }}</p>
            <a href="{{ route('viagem') }}">Calcular Novamente</a>
        </div>
        @endif

        <footer>
            <a href="{{ route('index') }}">Retornar à Página Inicial</a>
        </footer>
    </div>

</body>
</html>
