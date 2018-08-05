<?php
$sqlBorrower = "CREATE TABLE IF NOT EXISTS `credoLink`.`borrowerInfo` ( `formNo` INT(6) NOT NULL ,  `firstName` TEXT NOT NULL ,  `secName` TEXT NOT NULL ,  `thirdName` TEXT NOT NULL ,  `subCounty` TEXT NOT NULL ,  `division` TEXT NOT NULL ,  `estate` TEXT NOT NULL ,  `idNo` INT(8) NOT NULL ,  `email` VARCHAR(20) NOT NULL ,  `phoneNo` INT(9) NOT NULL , `maritalStatus` TEXT NOT NULL ) ENGINE = InnoDB;";

$dbaseErr = '';

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
        if ($count > $numRows) {
          echo "no more unique numbers";
          die();
        }
        $formNo = rand(1, 5);
        $sql = mysqli_query($conn, "SELECT formNo FROM borrowerInfo WHERE formNo = '$formNo'");
        if (!mysqli_fetch_array($sql)) {
          $unique = true;
        }
        $count++;
      }
      return $formNo;
    } echo formNo($conn, $numRows);
  } else {
    $formNo = rand(1, 5);
  }


if (!empty($_POST['firstName']) && !empty($_POST['secName']) && !empty($_POST['thirdName']) && !empty($_POST['subCounty']) && !empty($_POST['division']) && !empty($_POST['estate']) && !empty($_POST['idNo']) && mb_strlen($idNo) == 8 && mb_strlen($phoneNo) == 9 && !empty($_POST['email']) && !empty($_POST['phoneNo']) && !empty($_POST['maritalStatus'])) {
    $sql = "INSERT INTO borrowerInfo (formNo, firstName, secName, thirdName, subCounty, division, estate, idNo, email, phoneNo, maritalStatus) VALUES ('$formNo', '$firstName', '$secName', '$thirdName', '$subCounty', '$division', '$estate', '$idNo', '$email', '$phoneNo', '$maritalStatus')";

    if (isset($_POST['submitForm1'])) {
       if (mysqli_query($conn, $sql)) {
         echo "successfull";
       } else {
         echo 'nah'.mysqli_error($conn);
       }
    }
  } else {echo "something is wrong";}
}
