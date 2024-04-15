<?php

declare(strict_types=1);

function is_input_empty(string $user_name, string $user_hashed_password) 
{
    if (empty($user_name) || empty($user_hashed_password)) {
        return true;
    } else {
        return false;
    }   
}


function is_username_wrong(bool|array $result) 
{
    if (!$result) {
        return true;
    } else {
        return false;
    }   
}

function is_password_wrong(string $user_hashed_password, string $hashedPassword) 
{
    if (!password_verify($user_hashed_password, $hashedPassword)) {
        return true;
    } else {
        return false;
    }   
}