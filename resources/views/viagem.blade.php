<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Consumo de Combustível</title>
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
    @if(!isset($resultado))
    <div style="text-align:center;">
        <h1>Calculadora de Consumo de Combustível</h1>
        <form action="{{ route('calcular_viagem') }}" method="POST">
            @csrf
            <p>Combustível:</p>
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
            <p>Consumo de combustível do veículo (km/l):</p>
            <input type="number" name="consumo" step="0.01" required><br><br>
            <button type="submit">Calcular</button><br>
        </form>
    </div>
    @endif
    @if(isset($resultado))
    <div style="text-align:center;">
        <h1>Resultado</h1>
        <p>{{ $resultado }}</p>
        <p>Distância: {{ $distancia }} km</p>
        <p>Consumo do veículo: {{ $consumo }} km/l</p>
        <p>Valor por litro: R$ {{ number_format($valor_litro, 2, ',', '.') }}</p>
        <a href="{{ route('viagem') }}">Calcular Novamente</a>
    </div>
    @endif
    <br>
    <div style="text-align:center;">
        <a href="{{ route('index') }}">Retornar à Página Inicial</a>
    </div>
</body>
</html>