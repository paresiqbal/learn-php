<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function sayHello($name, $lastname)
    {
        return "Hello $name $lastname";
    }

    $value =  sayHello("Pares", "Iqbal");
    echo $value;
    ?>
</body>

</html>