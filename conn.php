<?php

$dbHost = 'monorail.proxy.rlwy.net:52749';
$dbUsername = 'root';
$dbPassword = 'PVrlYjcwddbqsFgjYZSFVeZfRXgOiApi';
$dbName = 'railway';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } else {
//     echo "Connection made successfully";
// }

?>