<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $sec = $_POST["sec"] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="sec">Qual é o total de segundos?</label>
            <input type="number" name="sec" id="sec" value="<?=$sec?>">
            <input type="submit" value="Calcular">
        </form>

        <section>
            <h2>Totalizando tudo</h2>
            <?php
                $sobra = $sec;
                $semana = (int) ($sobra / 604800);
                $sobra = $sobra % 604800;
                $dia = (int) ($sobra / 86400);
                $sobra = $sobra % 86400;
                $hora = (int) ($sobra / 3600);
                $sobra = $sobra % 3600;
                $minuto = (int) ($sobra / 60);
                $sobra = $sobra % 60;
                $segundo = $sobra;
                print "Analisando o valor que você digitou, <strong>". number_format($sec, 0, ",", ".") . "</strong> equivalem a um total de: <ul>";
                echo "<li>$semana semanas</li>";
                echo "<li>$dia dias</li>";
                echo "<li>$hora horas</li>";
                echo "<li>$minuto minutos</li>";
                echo "<li>$segundo segundos</li> </ul>";
            ?>
        </section>
    </main>
</body>
</html>