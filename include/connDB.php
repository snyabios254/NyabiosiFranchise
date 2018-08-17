<?php
$sqlBorrower = "CREATE TABLE IF NOT EXISTS `credoLink`.`borrowerInfo` ( `formNo` INT(6) NOT NULL ,  `firstName` TEXT NOT NULL ,  `secName` TEXT NOT NULL ,  `thirdName` TEXT NOT NULL ,  `subCounty` TEXT NOT NULL ,  `division` TEXT NOT NULL ,  `estate` TEXT NOT NULL ,  `idNo` INT(8) NOT NULL ,  `email` VARCHAR(20) NOT NULL ,  `phoneNo` INT(9) NOT NULL , `maritalStatus` TEXT NOT NULL ) ENGINE = InnoDB;";

$dbaseErr = $idNumrowsErr = $emailNumRowsErr = '';

if (mysqli_query($conn, $sqlBorrower)) {
  $formNo = '';
  $randSql = mysqli_query($conn, "SELECT * FROM borrowerInfo");
  $numRows = mysqli_num_rows($randSql);
  if ($numRows > 0) {
    function formNo($conn, $numRows) {
      $count = 0;
      $formNo = false;
      $unique = false;
      while (!$unique) {
        if ($count > $numRows+5) {
          echo "<div class='alert alert-danger'>There are no more uniquer numbers in the given range.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden=true>&times;</span></button>
          </div>";
          die();
        }
        $formNo = rand(1, 10);
        $sql = mysqli_query($conn, "SELECT formNo FROM borrowerInfo WHERE formNo = '$formNo'");
        if (!mysqli_fetch_array($sql)) {
          $unique = true;
        }
        $count++;
      }
      return $formNo;
    } formNo($conn, $numRows); $formNo = formNo($conn, $numRows);
  } else {
    $formNo = rand(1, 10);
  }

if (!empty($_POST['firstName']) && !empty($_POST['secName']) && !empty($_POST['thirdName']) && !empty($_POST['subCounty']) && !empty($_POST['division']) && !empty($_POST['estate']) && $emailNumRows == 0 && $idNumRows == 0 && !empty($_POST['idNo']) && mb_strlen($idNo) == 8 && mb_strlen($phoneNo) == 9 && !empty($_POST['email']) && !empty($_POST['phoneNo']) && !empty($_POST['maritalStatus'])) {
    $sql = "INSERT INTO borrowerInfo (formNo, firstName, secName, thirdName, subCounty, division, estate, idNo, email, phoneNo, maritalStatus) VALUES ('$formNo', '$firstName', '$secName', '$thirdName', '$subCounty', '$division', '$estate', '$idNo', '$email', '$phoneNo', '$maritalStatus')";

    if (isset($_POST['submitForm1'])) {
       if (mysqli_query($conn, $sql)) {
         #echo "successfull";
         $_SESSION['formNo'] = $formNo;
         if ($_POST['maritalStatus'] == "married") {
           if (isset($_SESSION['formNo'])) {
             header("location: married/married.php");
           } else {echo 'not able to login';}
         } else {
           if (isset($_SESSION['formNo'])) {
             header("location: single/single.php");
           } else {echo 'error occured';}
         }
       } else {echo 'nah'.mysqli_error($conn);}}
  } else {echo "something is wrong";}}
