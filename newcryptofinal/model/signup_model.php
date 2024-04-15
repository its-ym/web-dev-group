<?php

declare(strict_types=1);

function get_username(object $db_link, string $user_name)
{
    $query = "SELECT user_name FROM registered_form WHERE user_name = :user_name;";
    $stmt = $db_link->prepare($query);
    $stmt->bindParam(":user_name", $user_name);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_email(object $db_link, string $user_email)
{
    $query = "SELECT user_email FROM registered_form WHERE user_email = :user_email;";
    $stmt = $db_link->prepare($query);
    $stmt->bindParam(":user_email", $user_email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $db_link, string $user_name, string $user_email, string $user_hashed_password)
{
    $query = "INSERT INTO registered_form (user_name, user_email, user_hashed_password, user_registered_timestamp) VALUES 
    (:user_name, :user_email, :user_hashed_password, null);";
    $stmt = $db_link->prepare($query);

    $options = [

        'cost' => 12
    ];

    $hashedPassword = password_hash($user_hashed_password, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":user_name", $user_name);
    $stmt->bindParam(":user_email", $user_email);
    $stmt->bindParam(":user_hashed_password", $hashedPassword);
    $stmt->execute();  
}