<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php
        
        $nome = $_GET["name"] ?: "sem nome";
        //$_GET + $_POST + $_COOKIES = $_REQUEST
        $sn = $_GET["surname"] ?: "desconhecido";
        echo "<p> É um prazer te conhecer <strong>$nome $sn</strong>!</p>"
        
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página do formulário</a></p>
    </main>
</body>
</html>