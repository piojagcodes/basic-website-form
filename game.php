<?php
    session_start(); // Start a new or resume an existing session
?>

<!DOCTYPE html>
<html>
<head>
  <title>Settlers - Website Game</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Your CSS styles go here */
  </style>
</head>
<body>
<?php
    echo "<p>Welcome ".$_SESSION['user']."!"; // Display a personalized welcome message using the value stored in the 'user' session variable
?>
</body>
</html>
