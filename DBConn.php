<!--- Create connection to database --->

<?php
// Database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "PastimesDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data
$username = $_POST['username'];
$password = $_POST['password'];

// Retrieve user from database
$sql = "SELECT * FROM Users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Login successful!";
    } else {
        echo "Invalid password";
    }
} else {
    echo "User not found";
}

$conn->close();
?>