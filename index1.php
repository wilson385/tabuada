<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabuada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index2.php" method="get">
        <label for="valo"><em>Digite um valor:</em></label>
        <select name="valor" id="valo" require>
            <?php
                $i = 1;
                while ($i <= 10) {
                    echo "<option value='$i'>$i</option>";
                    $i += 1;
                }
            ?>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>