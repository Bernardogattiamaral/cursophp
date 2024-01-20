<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Testando Variáveis e Constantes</h1>

    <?php 
    $nome = "Gustavo";
    $sobrenome = "Guanabara";
    const PAÍS = "Brasil";

    $nome = "Bernardo";
    $sobrenome = "Goatti";

    echo "Muito prazer, $nome $sobrenome! Você mora no " . PAÍS;


    ?>

    <p><a href="teste.php">Link do teste 2</a></p>
</body>
</html>