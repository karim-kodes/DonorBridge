<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "config/db.php";

echo "✅ Database connection successful!<br>";

// Test query
$result = $conn->query("SELECT COUNT(*) AS total FROM users");

if ($result) {
    $row = $result->fetch_assoc();
    echo "There are " . $row['total'] . " users in the database.";
} else {
    echo "❌ Query failed: " . $conn->error;
}
?>
