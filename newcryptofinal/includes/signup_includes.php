<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_hashed_password = $_POST['user_hashed_password'];
  
    try {
      
        require_once 'dbhconnect.php';
        require_once '../model/signup_model.php';
        require_once '../controller/signup_controller.php';


        // ERROR HANDLERS

        $errors = [];


        if (is_input_empty($user_name, $user_email, $user_hashed_password)) {
         $errors["empty_input"]= "Fill in all fields!";
        } 
        
        if (is_email_invalid($user_email)) {
        $errors["invalid_email"]= "Invalid email used!";
        
        }

         if (is_username_taken($db_link, $user_name)) {
         $errors["username_taken"]= "Username already taken!";
        
        }

        if (is_email_registered($db_link, $user_email)) {
        $errors["email_used"]= "Email already registered!";
        
        }
        
        require_once 'config_session.php';

        if ($errors) {
        $_SESSION["errors_signup"] = $errors;
        header("Location: ../view/registration.php");
        die();

        }

        create_user($db_link, $user_name, $user_email, $user_hashed_password);


         header("Location: ../view/login.php?signup=success");

         $db_link = null;
         $stmt = null;

         die();


     } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

   } else {
    header("Location: ../view/registration.php");
    die();
    
}



