<?php

declare(strict_types=1);

function is_input_emty($username, $email, $pwd)
{
    if (empty($username) || empty($email) || empty($pwd)) {
        return true;
    } else {
        return false;
    }
}
