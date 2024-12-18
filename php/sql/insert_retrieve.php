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

// Data to be inserted (3 records)
$data = [
    ['john_doe', 'john.doe@example.com'],
    ['jane_smith', 'jane.smith@example.com'],
    ['bob_jones', 'bob.jones@example.com']
];

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO users (username, email) VALUES (?, ?)");

if ($stmt === false) {
    // If preparation fails, show the error message
    die("Error preparing the SQL query: " . $conn->error);
}

// Loop through the data and insert each record
foreach ($data as $row) {
    // Bind parameters (s for string)
    $stmt->bind_param("ss", $row[0], $row[1]);

    // Execute the query
    if ($stmt->execute()) {
        echo "New record created successfully for {$row[0]}<br>";
    } else {
        echo "Error: " . $stmt->error . "<br>";
    }
}

// Close the statement
$stmt->close();

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
