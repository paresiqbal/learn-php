<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_contr.inc.php";

        // handling error
        $errors = [];

        if (is_input_emty($username, $email, $pwd)) {
            $errors["empty input"] = "Fill all fields!";
        }

        if (is_email_invalid($email)) {
            $errors["invalid email"] = "Invalid email!";
        }

        if (is_username_taken($pdo, $username)) {
            $errors["username taken"] = "Username already taken!";
        }

        if (is_email_registered($pdo, $email)) {
            $errors["email registered"] = "Email already registered!";
        }

        // start session
        require_once "config_session.inc.php";

        if ($errors) {
            $_SESSION["errors"] = $errors;
            header("Location: ../index.php");
            die();
        }

        create_users($pdo,  $username,  $email,  $pwd);

        header("Location: ../index.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
