<?php
$conn = new mysqli("localhost", "root", "", "group1_db");
if ($conn->connect_error) {
 die("Database connection failed: " . $conn->connect_error);
}
echo "<h1>IT412 Web and Database Server</h1>";
echo "<h2>Groupname</h2>";
echo "<p>Database connection successful!</p>";
$conn->close();
?>
