<?php
$tableGuarantorInfo = "CREATE TABLE IF NOT EXISTS `credoLink`.`guarantorInfo` (`formNo` INT(6) NOT NULL, `firstName` TEXT NOT NULL, `secName` TEXT NOT NULL, `thirdName` TEXT NOT NULL, `idNo` TEXT NOT NULL, `phoneNo` INT(9) NOT NULL)";

$tabelSpouseInfo = "CREATE TABLE IF NOT EXISTS `credoLink`.`spouseInfo` (`formNo` INT(6) NOT NULL, `firstName` TEXT NOT NULL, `secName` TEXT NOT NULL, `thirdName` TEXT NOT NULL, `idNo` TEXT NOT NULL, `phoneNo` INT(9) NOT NULL)";
$gr2Sql = '';
mysqli_query($conn, $tabelSpouseInfo);
if (mysqli_query($conn, $tableGuarantorInfo)) {
  $numRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM guarantorInfo WHERE idNo = '$grIdNo' && formNo = '$formNo'"));
  if ($numRows > 0) {echo 'first grsql';
    $grSql = "UPDATE guarantorInfo SET formNo = '$formNo', firstName = '$grFirstName', secName = '$grSecName', thirdName = '$grThirdName', idNo = '$grIdNo', phoneNo = '$grPhoneNo' WHERE idNo = '$grIdNo'";

    $gr2Sql = "UPDATE guarantorInfo SET formNo = '$formNo', firstName = '$gr2FirstName', secName = '$gr2SecName', thirdName = '$gr2ThirdName', idNo = '$gr2IdNo', phoneNo = '$gr2PhoneNo' WHERE idNo = '$gr2IdNo'";
  } else {echo 'second grsql';
    $grSql = "INSERT INTO guarantorInfo (formNo, firstName, secName, thirdName, idNo, phoneNo) VALUES ('$formNo','$grFirstName', '$grSecName', '$grThirdName', '$grIdNo', '$grPhoneNo');";
  }

  $numRowsErr = $spNumRows = '';

  $spNumRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM spouseInfo WHERE idNo = '$spIdNo'"));

  if ($spNumRows == 0) {
    if (!empty($_POST['spFirstName']) && !empty($_POST['spSecName']) && !empty($_POST['spThirdName']) && !empty($_POST['spIdNo']) && !empty($_POST['spPhoneNo'])) {
      if (mysqli_query($conn, "INSERT INTO spouseInfo (formNo, firstName, secName, thirdName, idNo, phoneNo) VALUES ('$formNo', '$spFirstName', '$spSecName', '$spThirdName', '$spIdNo', '$spPhoneNo')")) {

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
            $_SESSION['formNo'] = $formNo;
            if (isset($_SESSION['formNo'])) {
              header("location: ../security/security.php");
            }    
          } else {echo 'the first guarantor information is requiered';}
        }
      } else {
        echo 'unable to insert info';
      }
    } else {echo 'someth is wrong';}
  } else {
    if (!empty($_POST['grFirstName']) && !empty($_POST['grSecName']) && !empty($_POST['grThirdName']) && !empty($_POST['grIdNo']) && !empty($_POST['grPhoneNo'])) {
      if (mysqli_query($conn, $grSql)) {
        $_SESSION['formNo'] = $formNo;
        if (isset($_SESSION['formNo'])) {
          header("location: ../security/security.php");
        }
      } else {echo 'the first guarantor information is requiered';}
    } else {echo 'q';}
    echo 'spouse id already exists';}
} else {
  echo 'problem here'.mysqli_error($conn);
}
