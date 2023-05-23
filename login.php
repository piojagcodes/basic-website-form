<?php
    require_once "connect.php"; // Include the "connect.php" file for establishing a database connection

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Set the error reporting mode


    try{
    $connection = @new mysqli($host, $db_user, $db_password, $db_name); // Create a new instance of the mysqli class for database connection
    } catch (mysqli_sql_exception $exception) {
        echo "Error: " . mysqli_connect_errno();
        exit;
    }
        $login = $_POST['login']; // Get the value of the 'login' input from the POST request
        $password = $_POST['password']; // Get the value of the 'password' input from the POST request

        echo "It works!"; // Output the message "It works!"

        $connection->close(); // Close the database connection
    
?>