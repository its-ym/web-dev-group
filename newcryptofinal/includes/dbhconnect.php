<?php

$rdbms = 'mysql';
$host = 'localhost';
$port = '3306';
$charset = 'utf8mb4';
$db_name = 'cryptoshow_db';
$pdo_dsn = $rdbms . ':host=' . $host. ';port=' . $port . ';dbname=' . $db_name . ';charset=' . $charset;
$pdo_user_name = 'cryptoshowuser';
$pdo_user_password = 'cryptoshowpass';



try {
  
   $db_link = new PDO($pdo_dsn, $pdo_user_name, $pdo_user_password);
   $db_link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}




