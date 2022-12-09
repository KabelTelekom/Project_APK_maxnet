<?php

$servername = "localhost";
$username = "user_kantor";
$password = "#user_kantor#";
$dbname = "web_kantor";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


