<?php

    session_start(); // Start a new or resume an existing session

    require_once "connect.php"; // Include the "connect.php" file for establishing a database connection

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Set the error reporting mode


    try {
        $connection = @new mysqli($host, $db_user, $db_password, $db_name); // Create a new instance of the mysqli class for database connection
    } catch (mysqli_sql_exception $exception) {
        echo "Error: " . mysqli_connect_errno();
        exit;
    }

    $login = $_POST['login']; // Get the value of the 'login' input from the POST request
    $password = $_POST['password']; // Get the value of the 'password' input from the POST request

    $sql = "SELECT * FROM users WHERE user='$login' AND password='$password'"; // SQL query to retrieve user data

    if ($result = @$connection->query($sql)) {
        $how_many_users = $result->num_rows; // Get the number of rows returned by the query
        if ($how_many_users > 0) {
            $row = $result->fetch_assoc(); 
            $_SESSION['user'] = $row['user']; // Retrieve the 'user' value from the query result

            $result->free_result(); // Free the query result memory
            header('Location: game.php'); // Redirect the user to the game.php page
        } else {
            // Handle the case when no matching user is found
        }
    }

    $connection->close(); // Close the database connection
?>
