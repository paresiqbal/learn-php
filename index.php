<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $bool = true;
    $a = 1;
    $b = 2;

    if ($a < $b && !$bool) {
        echo "Kondisi 1 terpenuhi";
    } else if ($a > $b && $bool) {
        echo "kondisi 2 terpenuhi";
    } else {
        echo "Tidak ada kondisi yang terpenuhi";
    }

    echo "<br>";

    switch ($a) {
        case 1:
            echo "Nilai a adalah 1";
            break;
        case 2:
            echo "Nilai a adalah 2";
            break;
        default:
            echo "Nilai a tidak ada yang cocok";
    }
    ?>
</body>

</html>