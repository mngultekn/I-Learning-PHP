<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10x10 Çarpım Tablosu</title>
    <style>
    body {
        background-color: black;

    }

    table {
        border-collapse: collapse;
        width: 50%;
        margin: 50px auto;
        background-color: white;
    }

    table,
    th,
    td {
        border: 1px solid black;
        text-align: center;
        padding: 10px;
    }

    /* td:hover {
        background-color: black;
        color: white;
    }

    tr:hover {
        background-color: black;
        color: white;
    }

    th:hover {
        background-color: black;
        color: white;
    } */

    th {
        background-color: #f2f2f2;
    }

    h1 {
        color: white;
        text-align: center;
        margin-top: 50px;

    }
    </style>
</head>

<body>
    <h1>10X10 Çarpım Tablosu</h1>
    <table>
        <thead>
            <tr>
                <th>*</th>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<th>$i</th>";
                for ($j = 1; $j <= 10; $j++) {
                    $result = $i * $j;
                    echo "<td>$result</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>