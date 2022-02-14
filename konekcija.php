<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'imenik';

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn == true ){
    echo "Konekcija nije uspjesna";
} 



?>