<?php
// Function to sanitize and validate input
function sanitize_input($data) {
    $data = trim($data); // Remove whitespace from the beginning and end
    $data = stripslashes($data); // Remove backslashes (\)
    $data = htmlspecialchars($data); // Convert special characters to HTML entities to prevent XSS attacks
    return $data;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection parameters
    $rdbms = 'mysql';
    $host = 'localhost';
    $port = '3306';
    $charset = 'utf8mb4';
    $db_name = 'cryptoshow_db';
    $pdo_dsn = $rdbms . ':host=' . $host. ';port=' . $port . ';dbname=' . $db_name . ';charset=' . $charset;
    $pdo_user_name = 'cryptoshowuser';
    $pdo_user_password = 'cryptoshowpass';
    
    try {
        // Create a PDO instance
        $db_link = new PDO($pdo_dsn, $pdo_user_name, $pdo_user_password);
        $db_link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Sanitize and validate user input
        $user_fullname = sanitize_input($_POST['user_fullname']);
      
        $user_email = filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL);
        $event_name = sanitize_input($_POST['event_name']);
        $event_ticket = sanitize_input($_POST['event_ticket']);

        // Check if email is valid
        if (!$user_email) {
            throw new Exception("Invalid email format");
        }

        // Prepare an SQL statement to insert data into the database
        $stmt = $db_link->prepare("INSERT INTO checkout (user_fullname, user_email, event_name, event_ticket) VALUES (:user_fullname, :user_email, :event_name, :event_ticket)");

        // Bind parameters
        $stmt->bindParam(':user_fullname', $user_fullname);
        $stmt->bindParam(':user_email', $user_email);
        $stmt->bindParam(':event_name', $event_name);
        $stmt->bindParam(':event_ticket', $event_ticket);

        // Execute the statement
        $stmt->execute();

        // Redirect to a success page or display a success message
        header("Location: ../view/thankyou.php");
        exit();
    } catch (PDOException $e) {
        // Handle database errors
        die("Database Error: " . $e->getMessage());
    } catch (Exception $e) {
        // Handle validation errors
        header("Location: ../view/checkoutform.php?message=" . urlencode($e->getMessage()));
        exit();
    }
} else {
    // Redirect if the form is not submitted
    header("Location: ../view/checkoutform_general.php");
    exit();
}
