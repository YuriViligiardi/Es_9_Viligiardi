<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome Colorato</title>
</head>
<body>
    <?php
        $color = "rgb(" . rand(0,255) . ", " . rand(0,255) . ", " . rand(0,255) . ")";
        $name = "Yuri";
        echo "<h1 style='color: $color;'>$name</h1>";
    ?>
</body>
</html>