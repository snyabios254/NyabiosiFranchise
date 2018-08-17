<?php
$assets1 = $year1 = $serialNo1 = $buyPrice1 = $sellPrice1 = '';
$assets1Err = $year1Err = $serialNo1Err = $buyPrice1Err = $sellPrice1Err = '';
$assets2 = $year2 = $serialNo2 = $buyPrice2 = $sellPrice2 = '';
$assets2Err = $year2Err = $serialNo2Err = $buyPrice2Err = $sellPrice2Err = '';

$assets3 = $year3 = $serialNo3 = $buyPrice3 = $sellPrice3 = '';
$assets3Err = $year3Err = $serialNo3Err = $buyPrice3Err = $sellPrice3Err = '';

$assets4 = $year4 = $serialNo4 = $buyPrice4 = $sellPrice4 = '';
$assets4Err = $year4Err = $serialNo4Err = $buyPrice4Err = $sellPrice4Err = '';

$assets4 = $year4 = $serialNo4 = $buyPrice4 = $sellPrice4 = '';
$assets4Err = $year4Err = $serialNo4Err = $buyPrice4Err = $sellPrice4Err = '';

$assets5 = $year5 = $serialNo5 = $buyPrice5 = $sellPrice5 = '';
$assets5Err = $year5Err = $serialNo5Err = $buyPrice5Err = $sellPrice5Err = '';

$loanAmountErr = $loanAmount = $rateCheck = $rateCheckErr2 = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (!empty($_POST['assets1'])) {
    $assets1 = mysqli_real_escape_string($conn, $_POST['assets1']);
  } else {
    $assets1Err .= 'alert alert-danger';
  }

  if (!empty($_POST['year1'])) {
    $year1 = mysqli_real_escape_string($conn, $_POST['year1']);
  } else {
    $year1Err = 'alert alert-danger';
  }

  if (!empty($_POST['serialNo1'])) {
    $serialNo1 = mysqli_real_escape_string($conn, $_POST['serialNo1']);
  } else {
    $serialNo1Err = 'alert alert-danger';
  }

  if (!empty($_POST['buyPrice1'])) {
    $buyPrice1 = mysqli_real_escape_string($conn, $_POST['buyPrice1']);
  } else {
    $buyPrice1Err = 'alert alert-danger';
  }

  if (!empty($_POST['sellPrice1'])) {
    $sellPrice1 = mysqli_real_escape_string($conn, $_POST['sellPrice1']);
  } else {
    $sellPrice1Err = 'alert alert-danger';
  }

  #######################################

  if (!empty($_POST['assets2'])) {
    $assets2 = mysqli_real_escape_string($conn, $_POST['assets2']);
  } else {
    $assets2Err .= 'alert alert-danger';
  }

  if (!empty($_POST['year2'])) {
    $year2 = mysqli_real_escape_string($conn, $_POST['year2']);
  } else {
    $year2Err = 'alert alert-danger';
  }

  if (!empty($_POST['serialNo2'])) {
    $serialNo2 = mysqli_real_escape_string($conn, $_POST['serialNo2']);
  } else {
    $serialNo2Err = 'alert alert-danger';
  }

  if (!empty($_POST['buyPrice2'])) {
    $buyPrice2 = mysqli_real_escape_string($conn, $_POST['buyPrice2']);
  } else {
    $buyPrice2Err = 'alert alert-danger';
  }

  if (!empty($_POST['sellPrice2'])) {
    $sellPrice2 = mysqli_real_escape_string($conn, $_POST['sellPrice2']);
  } else {
    $sellPrice2Err = 'alert alert-danger';
  }

  #######################################

  if (!empty($_POST['assets3'])) {
    $assets3 = mysqli_real_escape_string($conn, $_POST['assets3']);
  } else {
    $assets3Err .= 'alert alert-danger';
  }

  if (!empty($_POST['year3'])) {
    $year3 = mysqli_real_escape_string($conn, $_POST['year3']);
  } else {
    $year3Err = 'alert alert-danger';
  }

  if (!empty($_POST['serialNo3'])) {
    $serialNo3 = mysqli_real_escape_string($conn, $_POST['serialNo3']);
  } else {
    $serialNo3Err = 'alert alert-danger';
  }

  if (!empty($_POST['buyPrice3'])) {
    $buyPrice3 = mysqli_real_escape_string($conn, $_POST['buyPrice3']);
  } else {
    $buyPrice3Err = 'alert alert-danger';
  }

  if (!empty($_POST['sellPrice3'])) {
    $sellPrice3 = mysqli_real_escape_string($conn, $_POST['sellPrice3']);
  } else {
    $sellPrice3Err = 'alert alert-danger';
  }

  #######################################

  if (!empty($_POST['assets4'])) {
    $assets4 = mysqli_real_escape_string($conn, $_POST['assets4']);
  } else {
    $assets4Err .= 'alert alert-danger';
  }

  if (!empty($_POST['year4'])) {
    $year4 = mysqli_real_escape_string($conn, $_POST['year4']);
  } else {
    $year4Err = 'alert alert-danger';
  }

  if (!empty($_POST['serialNo4'])) {
    $serialNo4 = mysqli_real_escape_string($conn, $_POST['serialNo4']);
  } else {
    $serialNo4Err = 'alert alert-danger';
  }

  if (!empty($_POST['buyPrice4'])) {
    $buyPrice4 = mysqli_real_escape_string($conn, $_POST['buyPrice4']);
  } else {
    $buyPrice4Err = 'alert alert-danger';
  }

  if (!empty($_POST['sellPrice4'])) {
    $sellPrice4 = mysqli_real_escape_string($conn, $_POST['sellPrice4']);
  } else {
    $sellPrice4Err = 'alert alert-danger';
  }

  #######################################

  if (!empty($_POST['assets5'])) {
    $assets5 = mysqli_real_escape_string($conn, $_POST['assets5']);
  } else {
    $assets5Err .= 'alert alert-danger';
  }

  if (!empty($_POST['year5'])) {
    $year5 = mysqli_real_escape_string($conn, $_POST['year5']);
  } else {
    $year5Err = 'alert alert-danger';
  }

  if (!empty($_POST['serialNo5'])) {
    $serialNo5 = mysqli_real_escape_string($conn, $_POST['serialNo5']);
  } else {
    $serialNo5Err = 'alert alert-danger';
  }

  if (!empty($_POST['buyPrice5'])) {
    $buyPrice5 = mysqli_real_escape_string($conn, $_POST['buyPrice5']);
  } else {
    $buyPrice5Err = 'alert alert-danger';
  }

  if (!empty($_POST['sellPrice5'])) {
    $sellPrice5 = mysqli_real_escape_string($conn, $_POST['sellPrice5']);
  } else {
    $sellPrice5Err = 'alert alert-danger';
  }

  if (!empty($_POST['loanAmount'])) {
    $loanAmount = mysqli_real_escape_string($conn, $_POST['loanAmount']);
  } else {
    $loanAmountErr = 'alert alert-danger';
  }
}
