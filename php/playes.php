<?php

$players = ["Virat Kohli", "Rohit Sharma", "MS Dhoni", "Sachin Tendulkar", "Ravindra Jadeja", "KL Rahul", "Hardik Pandya", "Shubman Gill", "Cheteshwar Pujara", "Mohammad Shami"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Indian Cricket Players</title>
</head>
<body>
    <h1> Indian Cricket Players</h1>
    <ul>
        <?php
        
        foreach ($players as $player) {
            echo "<li>" . $player . "</li>";
        }
        ?>
    </ul>
</body>
</html>
