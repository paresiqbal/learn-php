<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $string =  "Hello World!";

    echo strpos($string, "W");
    echo "<br>";

    echo str_replace("World!", "Guys", $string);
    echo "<br>";

    echo strtolower($string);
    echo "<br>";

    print_r(explode(" ", $string));
    ?>
</body>

</html>