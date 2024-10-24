<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İsim Listesi</title>
</head>

<body>
    <h1>İsim Listesi</h1>
    <?php
    $isimler = array("Ahmet", "Mehmet", "Kadir", "Emirhan", "Muhammed");

    foreach ($isimler as $isim) {
        echo "$isim<br>";
    }
    ?>
</body>

</html>