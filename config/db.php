<?php

$servername = "localhost";
$username = "root";
$password = "";
$mydb = "dentaline";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$mydb", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("Connection Failed: ". $e->getMessage());
}