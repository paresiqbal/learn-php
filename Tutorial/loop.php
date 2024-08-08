<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // for ($i = 0; $i < 10; $i++) {
    //     echo "Hello $i <br>";
    // }

    // $number = 5;
    // while ($number < 10) {
    //     echo "This is number $number <br>";
    //     $number++;
    // }

    // $test = 10;
    // do {
    //     echo "This is test $test <br>";
    //     $test++;
    // } while ($test < 15);

    $fruits = ["Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange", "Mango" => "Green"];

    foreach ($fruits as $fruit => $color) {
        echo "$fruit $color . <br>";
    }
    ?>
</body>

</html>