<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Testando funções matemáticas</h1>

    <?php 
    $r = abs(500);
    $r2 = abs(-3000);
    print "<p>$r e $r2</p>";

    $n = base_convert(254, 10, 8);
    $n2 = base_convert(254, 10, 16);
    echo "<p>$n e $n2</p>";

    $h = hypot(34, 26);
    echo "<p>$h</p>";

    $s = sqrt(300);
    echo "<p>$s</p>"
    ?>
</body>
</html>