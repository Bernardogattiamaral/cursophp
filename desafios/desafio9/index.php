<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero1 = $_POST["num1"] ?? 0;
        $numero2 = $_POST["num2"] ?? 0;
        $peso1 = $_POST["pes1"] ?? 1;
        $peso2 = $_POST["pes2"] ?? 1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="num1">1º Valor</label>
            <input type="number" name="num1" id="num1" value="<?=$numero1?>">
            <label for="pes1">1º Peso</label>
            <input type="number" name="pes1" id="pes1" value="<?=$peso1?>">
            <label for="num2">2º Valor</label>
            <input type="number" name="num2" id="num2" value="<?=$numero2?>">
            <label for="pes2">2º Peso</label>
            <input type="number" name="pes2" id="pes2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Calculo das Médias</h2>
        <?php 
        $ms = ($numero1 + $numero2) / 2;
        $mp = ($numero1 * $peso1 + $numero2 * $peso2) / ($peso1 + $peso2);
        echo "Analisando os valores $numero1 e $numero2, temos: <ul>";
        echo "<li> A <strong> Média Aritmética Simples </strong> entre os valores é igual a " .number_format($ms, 2, ",", ".") ."</li>";
        echo "<li> A <strong> Média Aritmética Ponderada </strong> com pesos $peso1 e $peso2 é igual a " .number_format($mp, 2, ",", ".") ."</li>";
        ?>
    </section>
</body>
</html>