<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $min = 1412; 
        $sal= $_POST["salario"] ?? $min;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" min="<?=$min?>" value="<?=$min?>">
            <p>Considerando um salário mínimo de <strong>R$ 1412,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
        $res = intdiv( $sal, $min);
        $exc = $sal % $min;
        $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);
        echo "<p>Quem recebe um salário de " . numfmt_format_currency($padrao, $sal, "BRL") . " ganha <strong>$res salários mínimos </strong> + " . numfmt_format_currency($padrao, $exc, "BRL") . ".</p>";
        ?>
    </section>
</body>
</html>