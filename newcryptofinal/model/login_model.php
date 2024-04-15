<?php

declare(strict_types=1);

function get_user(object $db_link, string $user_name) 
{
    $query = "SELECT * FROM registered_form WHERE user_name = :user_name;";
    $stmt = $db_link->prepare($query);
    $stmt->bindParam(":user_name", $user_name);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}