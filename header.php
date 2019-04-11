<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Gästlista</title>
</head>
<header>
    <h1>Gästlista</h1>
    <ul>
        <li><a href="./lista.php">Gästlistan</a></li>
        <li><a href="./index.php">Vill du komma?</a></li>
    </ul>
</header>

<?php 

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "guest";

// Create connection

$conn = mysqli_connect(
    $servername, 
    $username,
    $password,
    $dbname
);

// Check connection
if ($conn->connect_error) {
    die( "Connection failed: ".$conn->connect_error);
}

?>