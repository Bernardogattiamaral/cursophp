<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Números Reais</h1>
        
        <?php 
        $num = $_POST["num"] ?? 0;
        $int =  (int) $num;
        $frac = $num - $int;
        echo "<p>Analisando o número <strong>". number_format($num, 3, ",", ".") . "</strong> informado pelo usuário:</p> <ul> <li>A parte inteira do número é <strong>". number_format($int, 0, ",", ".") ."</strong></li> <li>A parte fracionária do número é <strong>". number_format($frac, 3, ",", ".") ."</strong></li> </ul>";
        

        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05 Voltar</button>
    </main>
</body>
</html>