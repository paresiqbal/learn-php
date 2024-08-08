<?php

declare(strict_types=1);

function check_signup_errors()
{
    if (isset($_SESSION["errors"])) {
        $errors = $_SESSION["errors_signup"];

        echo "<br>";

        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }

        unset($_SESSION["errors_signup"]);
    }
}
