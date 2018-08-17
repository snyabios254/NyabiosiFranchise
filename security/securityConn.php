<?php
$assetsTable = "CREATE TABLE IF NOT EXISTS `credoLink`.`assets` (`date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, `formNo` INT(6) NOT NULL, `asset` TEXT NOT NULL, `purchaseYear` INT(4) NOT NULL, `serialNo` TEXT NOT NULL, `buyPrice` INT NOT NULL, `sellPrice` INT NOT NULL)";

$loanTable = "CREATE TABLE IF NOT EXISTS `credoLink`.`loans` (`formNo` INT(6) NOT NULL, `loanAmount` INT(7) NOT NULL)";

mysqli_query($conn, $assetsTable);
$asset1Errors = '';
$asset1Errors = !empty($_POST['assets1']) && !empty($_POST['year1']) && !empty($_POST['serialNo1']) && !empty($_POST['buyPrice1']) && !empty($_POST['sellPrice1']);

$asset2Errors = !empty($_POST['assets2']) && !empty($_POST['year2']) && !empty($_POST['serialNo2']) && !empty($_POST['buyPrice2']) && !empty($_POST['sellPrice2']);

$asset3Errors = !empty($_POST['assets3']) && !empty($_POST['year3']) && !empty($_POST['serialNo3']) && !empty($_POST['buyPrice3']) && !empty($_POST['sellPrice3']);

$asset4Errors = !empty($_POST['assets4']) && !empty($_POST['year4']) && !empty($_POST['serialNo4']) && !empty($_POST['buyPrice4']) && !empty($_POST['sellPrice4']);

$asset5Errors = !empty($_POST['assets5']) && !empty($_POST['year5']) && !empty($_POST['serialNo5']) && !empty($_POST['buyPrice5']) && !empty($_POST['sellPrice5']);
$loanInsert = '';
$numRowsLoan = '';
$numRowsLoan = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM loanAmount WHERE formNo = '$formNo'"));
if (mysqli_query($conn, $loanTable) && $numRowsLoan == 0 && !empty($_POST['loanAmount'])) {
  $loanInsert = "INSERT INTO loans (formNo, loanAmount) VALUES ('$formNo', '$loanAmount')";
  if (mysqli_query($conn, $loanInsert)) {
    if (isset($_POST['rateCheck'])) {
      if (isset($_POST['finish'])) {
        include("insertStatements.php");
        if ($assets1NumRows > 0) {
          echo 'numrows greater that zero'.'  '.$assets1NumRows;
        } else {
          $assets1Errors = '';
          if (!empty($_POST['assets1']) && !empty($_POST['year1']) && !empty($_POST['serialNo1']) && !empty($_POST['buyPrice1']) && !empty($_POST['sellPrice1']) && !empty($_POST['loanAmount'])) {
            if (mysqli_query($conn, $assets1Sql)) {
              echo 'data entered';
            } else {
              echo "not entered".mysqli_error($conn);
            }
          } else {echo 'not entered one';}
        }
        /*********************************/
        if ($assets2NumRows > 0) {
          echo 'numrows greater that zero'.'  '.$assets2NumRows;
        } else {
          $assets2Errors = '';
          if ($asset2Errors = !empty($_POST['assets2']) && !empty($_POST['year2']) && !empty($_POST['serialNo2']) && !empty($_POST['buyPrice2']) && !empty($_POST['sellPrice2']) && !empty($_POST['loanAmount'])) {
            if (mysqli_query($conn, $assets2Sql)) {
              echo 'data entered';
            } else {
              echo "not entered".mysqli_error($conn);
            }
          } else {echo 'not entered one';}
        }
        /*****************************************/
        if ($assets3NumRows > 0) {
          echo 'numrows greater that zero'.'  '.$assets3NumRows;
        } else {
          $assets3Errors = '';
          if ($asset3Errors = !empty($_POST['assets3']) && !empty($_POST['year3']) && !empty($_POST['serialNo3']) && !empty($_POST['buyPrice3']) && !empty($_POST['sellPrice3']) && !empty($_POST['loanAmount'])) {
            if (mysqli_query($conn, $assets3Sql)) {
              echo 'data entered';
            } else {
              echo "not entered".mysqli_error($conn);
            }
          } else {echo 'not entered one';}
        }
        /************************************/
        if ($assets4NumRows > 0) {
          echo 'numrows greater that zero'.'  '.$assets4NumRows;
        } else {
          $assets4Errors = '';
          if (!empty($_POST['assets4']) && !empty($_POST['year4']) && !empty($_POST['serialNo4']) && !empty($_POST['buyPrice4']) && !empty($_POST['sellPrice4']) && !empty($_POST['loanAmount'])) {
            if (mysqli_query($conn, $assets4Sql)) {
              echo 'data entered';
            } else {
              echo "not entered".mysqli_error($conn);
            }
          } else {echo 'not entered one';}
        }
        /***************************************/
        if ($assets5NumRows > 0) {
          echo 'numrows greater that zero'.'  '.$assets5NumRows;
        } else {
          $assets5Errors = '';
          if ($asset5Errors = !empty($_POST['assets5']) && !empty($_POST['year5']) && !empty($_POST['serialNo5']) && !empty($_POST['buyPrice5']) && !empty($_POST['sellPrice5']) && !empty($_POST['loanAmount'])) {
            if (mysqli_query($conn, $assets5Sql)) {
              echo 'data entered';
            } else {
              echo "not entered".mysqli_error($conn);
            }
          } else {echo 'not entered one';}
        }
      }
    } else {
      $rateCheckErr2 = $rateCheckErr = '';
      $rateCheckErr = 'alert alert-danger';
      $rateCheckErr2 .= '
      <div class="alert alert-info">You need to accept the interest rate.
      <div class="custom-control custom-checkbox float-right">
        <input type="checkbox" name="rateCheck" value="rateCheck" class="custom-control-input" id="rateCheck">
        <label class="custom-control-label text-danger" for="rateCheck">Interest rate is 40%.</label>
      </div>
      </div>
      ';
    }
  }
}
