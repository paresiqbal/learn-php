<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $fruits = ["apple", "banana", "orange"];
    $vegetables = ["carrot", "pea", "cabbage"];

    array_splice($fruits, 1, 0, "Mango");
    array_splice($fruits, 3, 0, $vegetables);

    print_r($fruits);
    echo "<br>";
    print_r($fruits);
    echo "<br>";


    $food = [
        "junk" => ["burger", "pizza"], "healthy" => ["salad", "pasta"]
    ];

    echo $food["junk"][0];

    ?>
</body>

</html>