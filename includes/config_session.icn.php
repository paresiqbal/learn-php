<?php

ini_set("session.use_only_cookies", 1);
ini_set("session.use_strict_mode", 1);

session_set_coockie_params([
    "lifetime" => 1800,
    "domain" => "localhost",
    "secure" => true,
    "httponly" => true,
    "path" => "/"
]);

session_start();

if (!isset($_SESSION["last_regenerate"])) {
    session_regenerate_id();
    $_SESSION["last_regenerate"] = time();
} else {
    $interval = 60 * 30;
}
