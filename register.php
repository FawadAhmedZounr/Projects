<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"]; // Password in plain text

    // Connect to the database (replace these values with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $db_password = ""; // Database connection password
    $dbname = "accounts";

    $conn = new mysqli($servername, $username, $db_password, $dbname);

    // Insert user data into the database (password is stored in plain text)
    $sql = "INSERT INTO clients (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the login page
        header("Location: index.html");
        exit();
    } else {
        echo "Error";
    }
}
?>
