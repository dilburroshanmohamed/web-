<?php
$servername = "localhost";  // Database server
$username = "root";         // MySQL username
$password = "";             // MySQL password (default is empty)
$dbname = "mes";            // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and display the data from the users table
$sql = "SELECT id, username, email FROM users"; // Adjust the column names as necessary
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data for each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Username: " . $row["username"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "No records found.";
}

// Close the connection
$conn->close();
?>
