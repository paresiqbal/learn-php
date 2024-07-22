<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="numb1" placeholder="first number" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <input type="number" name="numb2" placeholder="second number" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // catch data from form 
        $numb1 = filter_input(INPUT_POST, "numb1", FILTER_VALIDATE_FLOAT);
        $numb2 = filter_input(INPUT_POST, "numb2", FILTER_VALIDATE_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        // error handlers
        $errors = false;

        if ($numb1 === false || $numb2 === false || empty($operator)) {
            echo "Please fill all fields correctly.";
            $errors = true;
        }

        // calculate
        if (!$errors) {
            $result = 0; // default value
            switch ($operator) {
                case "add":
                    $result = $numb1 + $numb2;
                    break;
                case "sub":
                    $result = $numb1 - $numb2;
                    break;
                case "mul":
                    $result = $numb1 * $numb2;
                    break;
                case "div":
                    if ($numb2 != 0) {
                        $result = $numb1 / $numb2;
                    } else {
                        echo "Division by zero is not allowed.";
                        $errors = true;
                    }
                    break;
                default:
                    echo "Please select a valid operator.";
                    $errors = true;
            }

            if (!$errors) {
                echo "<br>";
                echo "Result is: " . $result;
            }
        }
    }
    ?>
</body>

</html>