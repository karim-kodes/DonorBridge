<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "donation_system";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
} else {
    echo "✅ Connected successfully to database!";
}
?>
