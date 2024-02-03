<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $numero = $_POST["num"] ?? 0;
    $porcentagem = $_POST["porcent"] ?? 50;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="num">Preço do Produto (R$)</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <label for="porcent">Qual será o percentual de reajuste? (<strong><span id="p">50</span>%</strong>)</label>
            <input type="range" name="porcent" id="porcent" oninput="MudarValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
            $formula = ($numero * $porcentagem / 100) + $numero;
            $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);
            echo "<p>O produto que custava " . numfmt_format_currency($padrao, $numero, "BRL") . ", com <strong> $porcentagem% de aumento vai passar a custar " . numfmt_format_currency($padrao, $formula, "BRL") . "</strong> a partir de agora.</p>"
        ?>
    </section>
    <script>
        function MudarValor() {
            var porc = document.getElementById("p")
            var react = document.getElementById("porcent")
            porc.innerText = react.value
        }
    </script>
</body>
</html>