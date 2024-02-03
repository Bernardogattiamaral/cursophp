<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $num = (int) $_POST["num"] ?? 1;
    ?> 
    <main>
    <h1>Informe um número</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="num">Número</label>
        <input type="number" name="num" id="num" value="<?= $num?>" step="1" min="1">
        <input type="submit" value="Calcular Raízes">
    </form>
    </main>
    <section>
    <h2>Resultado Final</h2>
    <?php
     $quadrada = $num ** (1/2);
     $cubica = $num ** (1/3);
     echo "Analisando o <strong>número $num </strong>, temos:";
     echo "<ul>";
    echo "<li>A sua raíz quadrada é <strong>".  number_format($quadrada, 2,",", ".") . "</strong></li>";
    echo "<li>A sua raíz cúbica é <strong>".  number_format($cubica, 2,",", ".") . "</strong></li>";
     echo "</ul>";
    ?>
    </section>
</body>
</html>