<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Connect to the database (replace these values with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $db_password = "";
    $dbname = "accounts";

    $conn = new mysqli($servername, $username, $db_password, $dbname);

    // Prepare a SQL query to check if the email and password match
    $sql = "SELECT * FROM clients WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        header("Location: loggedin.html");
        exit();
    } else {
        // Invalid email or password; display an error message
        echo "Invalid email or password";
    }
}
?>
