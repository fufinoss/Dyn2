<?php
$servername = "localhost:3306";
$username = "radosinskyf";
$password = "In7zulin1886+-";  
$dbname = "radosinskyf_todo_app";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Připojení k databázi selhalo: " . $conn->connect_error);
}
?>