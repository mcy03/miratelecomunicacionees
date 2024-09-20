<?php
$servername = 'lldn295.servidoresdns.net';
$username = 'qajv520';
$password = 'VierVenus24';
$database = 'qajv520';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>
