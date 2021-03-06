<?php
$sqlBorrower = "CREATE TABLE IF NOT EXISTS `credoLink`.`borrowerInfo` ( `formNo` INT(6) NOT NULL ,  `firstName` TEXT NOT NULL ,  `secName` TEXT NOT NULL ,  `thirdName` TEXT NOT NULL ,  `subCounty` TEXT NOT NULL ,  `division` TEXT NOT NULL ,  `estate` TEXT NOT NULL ,  `idNo` INT(8) NOT NULL ,  `email` VARCHAR(20) NOT NULL ,  `phoneNo` VARCHAR(9) NOT NULL , `maritalStatus` TEXT NOT NULL, `date` TIMESTAMP NOT NULL ) ENGINE = InnoDB;";

$tableDates = "CREATE TABLE IF NOT EXISTS `credoLink`.`tableDates` (`formNo` INT(6) NOT NULL , `returnDate` DATETIME NOT NULL, `defaultDate` DATETIME NOT NULL, status TEXT(10) NOT NULL) ENGINE = InnoDB;";

$sqlEmployer = "CREATE TABLE IF NOT EXISTS `credoLink`.`employer` (`formNo` INT(6) NOT NULL, `employer` TEXT NOT NULL, `occupation` TEXT NOT NULL) ENGINE = InnoDB;";

$dbaseErr = $idNumrowsErr = $emailNumRowsErr = '';

if (mysqli_query($conn, $sqlBorrower) && mysqli_query($conn, $sqlEmployer)) {
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
          echo "<div class='alert alert-danger'>There are no more unique numbers in the given range.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden=true>&times;</span></button>
          </div>";
          die();
        }
        $formNo = rand(1, 999999);
        $sql = mysqli_query($conn, "SELECT formNo FROM borrowerInfo WHERE formNo = '$formNo'");
        if (!mysqli_fetch_array($sql)) {
          $unique = true;
        }
        $count++;
      }
      return $formNo;
    } formNo($conn, $numRows); $formNo = formNo($conn, $numRows);
  } else {
    $formNo = rand(1, 999999);
  }
$phoneNoLen = mb_strlen($phoneNo);
$idNoLen = mb_strlen($idNo);

if (!empty($firstName) && !empty($employer) && !empty($occupation) && !empty($secName) && !empty($thirdName) && !empty($subCounty) && !empty($division) && !empty($estate) && $emailNumRows == 0 && $idNumRows == 0 && !empty($idNo) && $idNoLen == 8 && $phoneNoLen == 8 && !empty($email) && !empty($phoneNo) && !empty($maritalStatus)) {
    $sql = "INSERT INTO borrowerInfo (formNo, firstName, secName, thirdName, subCounty, division, estate, idNo, email, phoneNo, maritalStatus) VALUES ('$formNo', '$firstName', '$secName', '$thirdName', '$subCounty', '$division', '$estate', '$idNo', '$email', '$phoneNo', '$maritalStatus')";

    $sql2 = "INSERT INTO employer (formNo, employer, occupation) VALUES ('$formNo', '$employer', '$occupation')";

    if (isset($_POST['submitForm1'])) {
       if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
         #echo "successfull";
         $actualDateSql = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM borrowerInfo WHERE formNo = '$formNo'"));
         $actualDateSql2 ='';
         $actualDateSql2 = $actualDateSql['date'];
         echo $actualDateSql2;
         function returnDate($actualDateSql2) {
            $date = $actualDateSql2;
            $finalDate = strtotime($date.' +30 days');
            $final = date("Y-m-d H:i:s", $finalDate);
            return $final;
          }
          $returnDate = returnDate($actualDateSql2);
          #echo $returnDate;
        function defaultDate($actualDateSql2) {
           $date = $actualDateSql2;
           $finalDate = strtotime($date.' +40 days');
           $final = date("Y-m-d H:i:s", $finalDate);
           return $final;
         }
         $defaultDate = defaultDate($actualDateSql2);
         #echo $defaultDate;
          if(mysqli_query($conn, "INSERT INTO tableDates (formNo, returnDate, defaultDate, status) VALUES ('$formNo', '$returnDate', '$defaultDate', 'negative')")) {
             #echo 'the date are upto date';
          } else {echo 'date problem '.mysqli_error($conn);}
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
  } else {mysqli_error($conn);}} else {mysqli_error($conn);}
