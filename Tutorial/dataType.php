<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // scalar data types only contain one value
    $string = "Hello World";
    $integer = 10;
    $float = 10.5;
    $boolean = true;

    // array tyle contain multiple values
    $array = ["Hello", "World", 10, 10.5, true];

    // object type contain multiple values
    // $object = new Car()

    $firstName = "Pahreza";
    $lastName = "Iqbal";
    ?>

    <p>
        <?php
        echo "My name is $firstName $lastName";
        ?>
    </p>
</body>

</html>