<!DOCTYPE html>
<html>
<head>
  <title>Indian Cricket Players</title>
  <style>
    table {
      border-collapse: collapse;
      width: 10%;
      margin: 0 auto;
    }
    th, td {
      border: 1px solid black;
      padding: 1px;
      text-align: center;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body style="text-align: center;">
  <h1>Indian Cricket Players</h1>
  <table>
    <tr>
      <th>S.NO</th>
      <th>Player Name</th>
    </tr>
    <?php
    $players = array(
      "Rohit Sharma",
      "Virat Kohli",
      "KL Rahul",
      "Shubman Gill",
      "Suryakumar Yadav",
      "Hardik Pandya",
      "Ravindra Jadeja",
      "Jasprit Bumrah",
      "Mohammed Shami",
      "Kuldeep Yadav"
    );

    $serial_number = 1;
    foreach ($players as $player) {
      echo "<tr><td>$serial_number</td><td>$player</td></tr>";
      $serial_number++;
    }
    ?>
  </table>
</body>
</html>
