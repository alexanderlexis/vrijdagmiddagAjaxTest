<?php

$servername = 'localhost';
$username = 'root';
$password = 'root';
$db = 'ZeeslagNickAlex';

$conn = mysqli_connect($servername, $username, $password, $db);

$result = $conn->query('SELECT * FROM tekst ORDER BY id DESC');

if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
       echo $row["tekst"] . " |:| " . $row["timestamp"] . "<hr>";
   }
}

?>