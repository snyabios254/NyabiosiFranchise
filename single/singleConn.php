<?php
$idNoSql = mysli_query($conn, "");

$singleErrors = !empty($_POST['grFirstName']) && !empty($_POST['grSecName']) && !empty($_POST['grThirdName']) && !empty($_POST['grIdNo']) && !empty($_POST['grPhoneNo']) && !empty($_POST['gr2FirstName']) && !empty($_POST['gr2SecName']) && !empty($_POST['gr2ThirdName']) && !empty($_POST['gr2IdNo']) && !empty($_POST['gr2PhoneNo']);

$tableSingle = "CREATE TABLE IF NOT EXISTS `credoLink`.`guarantorInfo` (  `formNo` INT(6) NOT NULL, `firstName` TEXT NOT NULL, `secName` TEXT NOT NULL, `thirdName` TEXT NOT NULL, `idNo` TEXT NOT NULL, `phoneNo`)";

if ($singleErrors) {
  $numRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM guarantorInfo WHERE idNo = '$grIdNo'"));
  if ($numRows < 2) {
    $grSql = "INSERT INTO guarantorInfo (formNo, firstName, secName, thirdName, idNo, phoneNo) VALUES ('$grFirstName', '$grSecName', '$grThirdName', '$grIdNo', '$grPhoneNo');";
  } else {
    $grSql = "UPDATE guarantorInfo SET formNo = '$formNo', firstName = '$grFirstName', secName = '$grSecName', thirdName = '$grThirdName', idNo = '$grIdNo', phoneNo = '$grPhoneNo' WHERE idNo = '$grIdNo'";
  }

  $gr2Sql = "INSERT INTO guarantorInfo (formNo, firstName, secName, thirdName, idNo, phoneNo) VALUES ('$gr2FirstName', '$gr2SecName', '$gr2ThirdName', '$gr2IdNo', '$gr2PhoneNo');";

  mysqli_query($conn, $grSql);
  if ($numRows > 0 && $numRows < 2) {
      mysqli_query($conn, $gr2Sql);
  } else {
    $numRowsErr .= "
    <div class='alert alert-danger'>The ID number already exists.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden=true>&times;</span>  </button>
    </div>";
    ";
  }
}
