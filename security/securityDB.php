<?php
$assets1 = $year1 = $serialNo1 = $buyPrice1 = $sellPrice1 = '';
$assets1Err = $year1Err = $serialNo1Err = $buyPrice1Err = $sellPrice1Err = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if ($_POST['assets1']) {
    $assets1 = mysqli_real_escape_string($conn, $_POST['assets1']);
  } else {
    $assets1Err .= 'alert alert-danger';
  }

  if ($_POST['year1']) {
    $year1 = mysqli_real_escape_string($conn, $_POST['year1']);
  } else {
    $year1Err = 'alert alert-danger';
  }

  if ($_POST['serialNo1']) {
    $serialNo1 = mysqli_real_escape_string($conn, $_POST['serialNo1']);
  } else {
    $serialNo1Err = 'alert alert-danger';
  }

  if ($_POST['buyPrice1']) {
    $buyPrice1 = mysqli_real_escape_string($conn, $_POST['buyPrice1']);
  } else {
    $buyPrice1Err = 'alert alert-danger';
  }

  if ($_POST['sellPrice1']) {
    $sellPrice1 = mysqli_real_escape_string($conn, $_POST['sellPrice1']);
  } else {
    $sellPrice1Err = 'alert alert-danger';
  }
}
