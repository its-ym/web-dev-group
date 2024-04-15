<?php
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

        // Prepare an SQL statement to insert data into the database
        $stmt = $db_link->prepare("INSERT INTO event (event_name, event_date, event_venue) VALUES (:event_name, :event_date, :event_venue)");

        // Bind parameters
        $stmt->bindParam(':event_name', $_POST['event_name']);
        $stmt->bindParam(':event_date', $_POST['event_date']);
        $stmt->bindParam(':event_venue', $_POST['event_venue']);

        // Execute the statement
        $stmt->execute();

        // Redirect to a success page or display a success message
        header("Location: ../view/CreateEvent.php");
        exit();
    } catch (PDOException $e) {
        // Handle errors
        die("Error: " . $e->getMessage());
    }
} else {
    // Redirect to an error page or display an error message
    header("Location: ../view/CreateEvent.php");
    exit();
}