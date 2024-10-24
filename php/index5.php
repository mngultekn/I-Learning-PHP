<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayının Çarpanlarına Ayrılması</title>
</head>

<body>
    <h1>Sayının Çarpanlarına Ayrılması</h1>

    <form method="post">
        <label for="number">Bir sayı girin:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Çarpanlarına Ayır</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        
        echo "<h2>$number sayısının çarpanları:</h2>";

        for ($i = 2; $i <= $number; $i++) {
            while ($number % $i == 0) {
                echo "$i<br>";
                $number = $number / $i; 
            }
        }

        if ($number > 1) {
            echo "$number<br>";
        }
    }
    ?>
</body>

</html>