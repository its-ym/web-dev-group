<?php



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_name = $_POST['user_name'];
    $user_hashed_password = $_POST['user_hashed_password'];

try {

    require_once 'dbhconnect.php';
    require_once '../model/login_model.php';
    require_once '../controller/login_controller.php';

       // ERROR HANDLERS

       $errors = [];


       if (is_input_empty($user_name, $user_hashed_password)) {
        $errors["empty_input"]= "Fill in all fields!";
       } 

       $result = get_user($db_link, $user_name);

       if (is_username_wrong($result)) {
        $errors["login_incorrect"] = "Incorrect login info!";
       }

       if (!is_username_wrong($result) && is_password_wrong($user_hashed_password, $result["user_hashed_password"])) {
       $errors["login_incorrect"] = "Incorrect login info!";
       }
       
       require_once 'config_session.php';

       if ($errors) {
       $_SESSION["errors_login"] = $errors;
       header("Location: ../view/login.php");
       die();

       }  

       $newSessionId = session_create_id();
       $sessionId = $newSessionId . "_" . $result["user_id"];
       session_id($sessionId);

       $_SESSION["user_id"] = $result["user_id"];
       $_SESSION["user_name"] = htmlspecialchars($result["user_name"]);
    
      $_SESSION["last_regeneration"] = time();

      header("Location: ../view/login.php?login=success");
      $db_link = null;
      $stmt = null;

      die();
    
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}

} else {
    header("Location: ../view/login.php");
    die();  
}

