<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3 Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>

        <?php 
        $reais = $_POST["num"];
        $dolar = 4.92;
        $res = $reais / $dolar;
        $padraobr = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        //$padraous = numfmt_create("us", NumberFormatter::CURRENCY);
        echo "<p>Seus " . numfmt_format_currency($padraobr, $reais, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padraobr, $res, "USD") . "</strong> </p>"
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05 Voltar</button>
    </main>
</body>
</html>