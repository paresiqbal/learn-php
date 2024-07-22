<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $fruits = ["apple", "banana", "cherry"];
    echo $fruits[1];

    $fruits[] = "avocado";
    echo $fruits[3];

    $fruits[0] = "orange";
    echo $fruits[0];
    ?>
</body>

</html>