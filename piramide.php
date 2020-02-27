<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table cellspacing="0">
    <?php
    for($i = 0; $i < 10; $i++) {
        echo "<tr>";
        for($j = 0; $j < $i; $j++) {
                echo "<td width=70px height=70px bgcolor=#000000></td>";
        }
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>
