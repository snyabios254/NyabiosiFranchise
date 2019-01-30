<?php
$search = $searchErr1 = $hidden = $alertCleared = $searchRes = '';

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST['search'])) {
      $search = mysqli_real_escape_string($conn, $_POST['search']);
      while ($row = mysqli_fetch_assoc($currentDate)) {
        if ($search == $row['idNo']) {
          #echo $row['firstName'];
          if ($nowDate < $row['returnDate']) {
            $cardType = "border-success";
            $textType = "text-success";
          }
          if ($nowDate > $row['returnDate'] && $nowDate < $row['defaultDate']) {
            $cardType = "border-warning";
            $textType = "text-warning";
          }
          if ($nowDate > $row['defaultDate']) {
            $cardType = "border-danger";
            $textType = "text-danger";
          }
          if ($row['status'] == 'positive') {
            $cardType = "border border-primary";
            $textType = "text-primary";
            $alertCleared = '
            <div class="alert alert-primary" role="alert">
              Cleared!!
            </div>
            ';
            $hidden = "hidden";
          }
          $searchRes = '
          <div class="card '.$cardType.' col-lg-3" style="margin: 0rem;">
            <div class="card-body '.$textType.'">
            <a href="../home/edit.php?formNo='.$row['formNo'].'" style="color: black;"><h5 class="card-title">'.$row['firstName'].' '.$row['secName'].' '.$row['thirdName'].'</h5></a>
            <p class="card-text"><b>Final date: '.$row['returnDate'].'<br>Loan amount Ksh. '.$row['loanAmount'].'</b><br>'.$alertCleared.'</p>
              <a href="../pdfDownload/pdfForm.php?formNo='.$row['formNo'].'" target="_blank" '.$hidden.' class="btn btn-link">PDF</a>
            </div>
          </div>
          ';#echo $searchRes;
        } else {
          $searchErr1 = '
          <div class="row">
            <div class="col-md">
              <div class="alert alert-danger">
                The ID number '.$search.' has no existing record.
              </div>
            </div>
          </div>
          ';        }
      }
    } else {
      $searchErr = "is-invalid";
    }
  } else {
    mysqli_error($conn);
  }
