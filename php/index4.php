<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3'e Bölünebilen Sayılar</title>
</head>

<body>
    <h1>20 ile 50 Arasındaki 3'e Bölünebilen Sayılar</h1>
    <?php
    for ($i = 20; $i <= 50; $i++) {
        if ($i % 3 == 0) {
            echo "$i<br>";
        }
    }
    ?>
</body>

</html>