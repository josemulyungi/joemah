

<?php
$host = 'localhost';
$db = 'fashiondb';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO customers (full_name, email, phone) VALUES ('John Doe', 'john@example.com', '0721888215')";
if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>





