<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <input type="number" name="numb1" placeholder="first number" require>
        <select name="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <input type="number" name="numb2" placeholder="second number" require>
        <button>calculatted</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // catch data from form 
        $numb1 = filter_input(INPUT_POST, "numb1", FILTER_SANITIZE_NUMBER_FLOAT);
        $numb2 = filter_input(INPUT_POST, "numb2", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);
    }
    ?>
</body>

</html>