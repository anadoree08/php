<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">

        <h1>Resultado da Conversão</h1>

        <?php

            $valorReais = $_POST["valor"];

            $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='05-13-2026'&@dataFinalCotacao='05-31-2026'&$top=100&$format=json&$select=cotacaoCompra";

            $resposta = file_get_contents($url);

            $dados = json_decode($resposta, true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $valorDolar = $valorReais / $cotacao;

            echo "<p>Valor em reais: R$ " . number_format($valorReais, 2, ",", ".") . "</p>";

            echo "<p>Cotação do dólar: R$ " . number_format($cotacao, 2, ",", ".") . "</p>";

            echo "<p>Valor convertido: US$ " . number_format($valorDolar, 2, ",", ".") . "</p>";

        ?>

        <a href="index.php">Voltar</a>

    </div>

</body>
</html>