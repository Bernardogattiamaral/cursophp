<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1 Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>

        <?php 
            $num = $_POST["num"];
            $suc = $num + 1;
            $ant = $num - 1;

            echo "<p>O número escolhido foi <strong>$num</strong></p> <p>O seu antecessor é $ant</p> <p>O seu sucessor é $suc</p>";

        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05 Voltar</button>
    </main>
</body>
</html>












