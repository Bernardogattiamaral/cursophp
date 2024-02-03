<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dataAtual = date('Y');
        $dataNasc = $_POST["datanasc"] ?? 2000;
        $data = $_POST["data"] ?: $dataAtual;
    ?>
    <main>
        <h1>Calculando a sua Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="datanasc">Em que ano você nasceu?</label>
            <input type="number" name="datanasc" id="datanasc" value="<?=$dataNasc?>" max="<?=($dataAtual - 1)?>">
            <label for="data">Quer saber sua idade em qual ano?</label>
            <input type="number" name="data" id="data" min="<?=$dataNasc?>" value="<?=$data?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        $idade = $data - $dataNasc;
        echo "<p>Quem nasceu em $dataNasc vai ter <strong>$idade anos</strong> em $data</p>"
        
        ?>
    </section>
</body>
</html>