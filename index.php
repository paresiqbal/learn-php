<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <input type="number" name="numb1" placeholder="first number" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <input type="number" name="numb2" placeholder="second number" required>
        <button>calculatted</button>
    </form>



    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // catch data from form 
        $numb1 = filter_input(INPUT_POST, "numb1", FILTER_SANITIZE_NUMBER_FLOAT);
        $numb2 = filter_input(INPUT_POST, "numb2", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        // error handlers
        $errros = false;

        if (empty($numb1) || empty($numb2) || empty($operator)) {
            echo "please fill all fields";
            $errros = true;
        }

        if (!is_numeric(($numb1) && !is_numeric($numb2))) {
            echo "please enter a valid number";
            $errros = true;
        }

        // calculate
        if (!$errros) {
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
                    $result = $numb1 / $numb2;
                    break;
                default:
                    echo "please select a valid operator";
            }

            echo "<br>";
            echo "result is: " . $result;
        }
    }
    ?>
</body>

</html>