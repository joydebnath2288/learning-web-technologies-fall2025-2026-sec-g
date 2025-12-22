<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (empty($email) || empty($password)) {
        echo "All fields are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Dummy credentials (for demo)
    $correctEmail = "admin@example.com";
    $correctPassword = "123456";

    if ($email === $correctEmail && $password === $correctPassword) {
        echo "Login successful!";
    } else {
        echo "Invalid email or password.";
    }
}
?>
