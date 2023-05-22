<?php
    require_once "connect.php"; // Include the "connect.php" file for establishing a database connection

    $connection = @new mysqli($host, $db_user, $db_password, $db_name); // Create a new instance of the mysqli class for database connection

    if ($connection->connect_errno != 0) { // Check if there is a connection error
        echo "Error: " . $connection->connect_errno; // Output the connection error code
    } else {
        $login = $_POST['login']; // Get the value of the 'login' input from the POST request
        $password = $_POST['password']; // Get the value of the 'password' input from the POST request

        echo "It works!"; // Output the message "It works!"

        $connection->close(); // Close the database connection
    }
?>