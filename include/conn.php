<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$credoLink = "credoLink";

$conn = mysqli_connect($serverName, $userName, $password, $credoLink);

if (!$conn) {
  echo mysqli_error($conn);
}
