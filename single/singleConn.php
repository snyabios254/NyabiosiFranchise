<?php
$tableGuarantorInfo = "CREATE TABLE IF NOT EXISTS `credoLink`.`guarantorInfo` (  `formNo` INT(6) NOT NULL, `firstName` TEXT NOT NULL, `secName` TEXT NOT NULL, `thirdName` TEXT NOT NULL, `idNo` TEXT NOT NULL, `phoneNo` INT(9) NOT NULL)";
$gr2Sql = '';
if (mysqli_query($conn, $tableGuarantorInfo)) {
  $numRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM guarantorInfo WHERE idNo = '$grIdNo' && formNo = '$formNo'"));
  if ($numRows > 0) {echo 'first grsql';
    $grSql = "UPDATE guarantorInfo SET formNo = '$formNo', firstName = '$grFirstName', secName = '$grSecName', thirdName = '$grThirdName', idNo = '$grIdNo', phoneNo = '$grPhoneNo' WHERE idNo = '$grIdNo'";

    $gr2Sql = "UPDATE guarantorInfo SET formNo = '$formNo', firstName = '$gr2FirstName', secName = '$gr2SecName', thirdName = '$gr2ThirdName', idNo = '$gr2IdNo', phoneNo = '$gr2PhoneNo' WHERE idNo = '$gr2IdNo'";
  } else {echo 'second grsql';
    $grSql = "INSERT INTO guarantorInfo (formNo, firstName, secName, thirdName, idNo, phoneNo) VALUES ('$formNo','$grFirstName', '$grSecName', '$grThirdName', '$grIdNo', '$grPhoneNo');";
  }

  $numRowsErr = '';

  if ($numRows == 0 && !empty($_POST['gr2FirstName']) && !empty($_POST['gr2SecName']) && !empty($_POST['gr2ThirdName']) && !empty($_POST['gr2IdNo']) && !empty($_POST['gr2PhoneNo'])) {
      if (mysqli_query($conn, "INSERT INTO guarantorInfo (formNo, firstName, secName, thirdName, idNo, phoneNo) VALUES ('$formNo', '$gr2FirstName', '$gr2SecName', '$gr2ThirdName', '$gr2IdNo', '$gr2PhoneNo');")) {
        echo 'gr2 entered';
      }  else {
        echo mysqli_error($conn);
      }
  } else {echo 'there is a problem here '.mysqli_error($conn);
    $numRowsErr .= "
    <div class='alert alert-danger'>The ID number already exists.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden=true>&times;</span></button>
    </div>
    ";
  }

  if (!empty($_POST['grFirstName']) && !empty($_POST['grSecName']) && !empty($_POST['grThirdName']) && !empty($_POST['grIdNo']) && !empty($_POST['grPhoneNo'])) {
    if (mysqli_query($conn, $grSql)) {
      echo 'navigating to security and loan page';
      $_SESSION['formNo'] = $formNo;
      if (isset($_SESSION['formNo'])) {
        header("location: ../security/security.php");
      }  
    }
  } else {echo 'there some errors on guarantor one';}
} else {echo 'problem here'.mysqli_error($conn);}
