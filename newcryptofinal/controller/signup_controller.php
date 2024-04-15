<?php

declare(strict_types=1);

function is_input_empty(string $user_name, string $user_email, string $user_hashed_password) 
{
    if(empty($user_name) || empty($user_email) || empty($user_hashed_password)) {
        return true;
        
    } else {
    return false;
    }
}

function is_email_invalid(string $user_email) 
{
    if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        return true;
        
    } else {
    return false;
    }
}

function is_username_taken(object $db_link, string $user_name) 
{
    if(get_username($db_link, $user_name)) {
        return true;
        
    } else {
    return false;
    }
}

function is_email_registered(object $db_link, string $user_email) 
{
    if(get_email($db_link, $user_email)) {
        return true;
        
    } else {
    return false;
    }
}

function create_user(object $db_link, string $user_name, string $user_email, string $user_hashed_password) 
{
    set_user($db_link, $user_name, $user_email, $user_hashed_password);
}


