<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $div = $_POST["div"] ?? 0;
    $dev = $_POST["dev"] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <label for="idev">Dividendo</label>
        <input type="number" name="dev" id="idev" min="0" value="<?=$dev?>">
        <label for="idiv">Divisor</label>
        <input type="number" name="div" id="idiv" min="1" value="<?=$div?>">
        <input type="submit" value="Dividir">
    </main>
    
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 
        $res = intdiv ($dev, $div);
        $resto = $dev % $div;
        //echo "<ul>";
        //echo "<li>Dividendo: $dev </li>";
        //echo "<li>Divisor: $div </li>";
        //echo "<li>Quociente: $res </li>";
        //echo "<li>Resto: $resto </li>";
        //echo "</ul>";
        ?>
        <table class="divisao">
        <tr>
            <td><?=$dev?></td>
            <td><?=$div?></td>
        </tr>
        <tr>
            <td><?=$resto?></td>
            <td><?=$res?></td>
        </tr>
    </table>

       
    </section>
    </form>
</body>
</html>