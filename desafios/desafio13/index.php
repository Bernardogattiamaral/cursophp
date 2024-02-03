<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .nota {
            height: 55px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $reais = $_POST["reais"] ?? 0;
        $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="reais">Qual valor você deseja sacar (R$)?</label>
            <input type="number" name="reais" id="reais" value="<?=$reais?>" step="5" min="0">
            <p>*Notas disponíveis: R$100, R$50, R$10, R$5</p>
            <input type="submit" value="Sacar">
            
        </form>
        
    </main>

    <section>
        <h2>Saque de <?=numfmt_format_currency($padrao, $reais, "BRL")?> realizado</h2>
        <?php 
        $sobra = $reais;
        $cem = (int) ($sobra / 100);
        $sobra %= 100;
        $cinquenta = (int) ($sobra / 50);
        $sobra %= 50;
        $dez = (int) ($sobra / 10);
        $sobra %= 10;
        $cinco = (int) ($sobra / 5);
        $sobra %= 5;
        ?>
        <p>O caixa eletrônico vai te pagar as seguintes notas:</p> 
        <ul>
            <li><img src="imagens/100-reais.jpg" class="nota"> x<?=$cem?></li>
            <li><img src="imagens/50-reais.jpg" class="nota"> x<?=$cinquenta?></li>
            <li><img src="imagens/10-reais.jpg" class="nota"> x<?=$dez?></li>
            <li><img src="imagens/5-reais.jpg" class="nota"> x<?=$cinco?></li>
        </ul>
    </section>
</body>
</html>