<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$conn = '';

$conn1 = mysqli_connect($serverName, $userName, $password);

if (!$conn1) {
  echo mysqli_error($conn1);
}

$sql = mysqli_query($conn1, "CREATE DATABASE IF NOT EXISTS credoLink;");

if ($sql) {
  $conn = mysqli_connect($conn, $sql);
} else {
  echo 'database problem'.mysqli_error($conn);
}
