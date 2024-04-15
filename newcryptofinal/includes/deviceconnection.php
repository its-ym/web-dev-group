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

    // Function to sanitize input data
    function sanitize($data) {
        return htmlspecialchars(strip_tags(trim($data)));
    }

    try {
        // Create a PDO instance
        $db_link = new PDO($pdo_dsn, $pdo_user_name, $pdo_user_password);
        $db_link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare an SQL statement to insert data into the database
        $stmt = $db_link->prepare("INSERT INTO cryptographic_device (user_firstname, user_lastname, crypto_device_name, crypto_device_desc) VALUES (:user_firstname, :user_lastname, :crypto_device_name, :crypto_device_desc)");

        // Sanitize and validate input data
        $user_firstname = sanitize($_POST['user_firstname']);
        $user_lastname = sanitize($_POST['user_lastname']);
        $crypto_device_name = sanitize($_POST['crypto_device_name']);
        $crypto_device_desc = sanitize($_POST['crypto_device_desc']);

        // Validate input data
        if (empty($user_firstname) || empty($user_lastname) || empty($crypto_device_name) || empty($crypto_device_desc)) {
            throw new Exception("All fields are required.");
        }

        // Bind parameters
        $stmt->bindParam(':user_firstname', $user_firstname);
        $stmt->bindParam(':user_lastname', $user_lastname);
        $stmt->bindParam(':crypto_device_name', $crypto_device_name);
        $stmt->bindParam(':crypto_device_desc', $crypto_device_desc);

        // Execute the statement
        $stmt->execute();

        // Redirect to a success page or display a success message
        header("Location: ../view/managedevices.php");
        exit();
    } catch (PDOException $e) {
        // Handle database errors
        die("Database Error: " . $e->getMessage());
    } catch (Exception $e) {
        // Handle validation errors
        die("Validation Error: " . $e->getMessage());
    }
} else {
    // Redirect to an error page or display an error message
    header("Location: ../view/managedevices.php");
    exit();
}
