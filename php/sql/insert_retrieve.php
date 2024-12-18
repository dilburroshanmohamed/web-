<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully<br>";

    // SQL query to insert multiple rows into the 'users' table
    $insert_sql = "INSERT INTO users (firstname, lastname, email) VALUES 
            ('Hannath', 'K', 'hannath.k@google.com'),
            ('John', 'Doe', 'johndoe@example.com'),
            ('Jane', 'Smith', 'janesmith@example.com'),
            ('Alice', 'Johnson', 'alicej@example.com')";

    if ($conn->query($insert_sql) === TRUE) {
        echo "New records created successfully<br>";
    } else {
        echo "Error: " . $insert_sql . "<br>" . $conn->error;
    }

    // SQL query to retrieve data from the 'users' table
    $select_sql = "SELECT id, firstname, lastname, email FROM users";
    $result = $conn->query($select_sql);

    if ($result->num_rows > 0) {
        // Output data for each row in an HTML table
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>Email</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["firstname"] . "</td>
                    <td>" . $row["lastname"] . "</td>
                    <td>" . $row["email"] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No results found";
    }

    $conn->close();
}
?>
