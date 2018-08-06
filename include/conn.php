<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$conn = '';

$conn = mysqli_connect($serverName, $userName, $password);

if (!$conn) {
  echo mysqli_error($conn);
}

$sql = mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS credoLink;");

if ($sql) {
  $conn = mysqli_connect($serverName, $userName, $password, 'credoLink');
} else {
  echo 'database problem'.mysqli_error($conn);
}
