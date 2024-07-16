<?php

// prevent direct access
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST["firstname"]);
    $lastName = htmlspecialchars($_POST["lastname"]);
    $favGames = htmlspecialchars($_POST["favoritegame"]);

    echo "First Name: $firstName <br>";
    echo "Last Name: $lastName <br>";
    echo "Favorite Game: $favGames <br>";
}
