<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>processamento</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <?php
    $valor = isset($_GET['valor']) ? $_GET['valor'] : 1;
    echo "<h1>Tabuda de $valor</h1>";
    $i = 1;
    while ($i <= 10) {
        $resultado = $valor * $i;
        echo "<h2>$valor x $i = $resultado</h2>";
        $i += 1;
    }
?>
    <a href="index1.php" class="botao">Voltar</a>

    
</body>
</html>