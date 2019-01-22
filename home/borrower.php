<?php
$formNo = '';
$tableBorrowerSql = mysqli_query($conn, "SELECT * FROM borrowerInfo");
// $dateBorrower = mysqli_query($conn, "SELECT borrowerInfo.formNo, borrowerInfo.firstName, borrowerInfo.secName, borrowerInfo.thirdName, tableDates.returnDate, loans.loanAmount FROM borrowerInfo LEFT JOIN tableDates ON borrowerInfo.formNo = tableDates.formNo INNER JOIN loans ON borrowerInfo.formNo = loans.formNo;");
$tableBorrowerNumRows = mysqli_num_rows($tableBorrowerSql);
$tableBorrowerData = mysqli_fetch_assoc($tableBorrowerSql);
$count = 0;
$allBorrowers = '';
$formNoSql = mysqli_fetch_assoc($tableBorrowerSql);
$formNo = $formNoSql['formNo'];

if ($tableBorrowerNumRows > 0) {
  $currentDate = mysqli_query($conn, "SELECT borrowerInfo.formNo,borrowerInfo.idNo, borrowerInfo.firstName, borrowerInfo.secName, borrowerInfo.thirdName, borrowerInfo.email, borrowerInfo.phoneNo, loans.loanAmount, borrowerInfo.estate, tableDates.returnDate, tableDates.defaultDate FROM borrowerInfo INNER JOIN loans ON borrowerInfo.formNo = loans.formNo INNER JOIN tableDates ON borrowerInfo.formNo = tableDates.formNo ORDER BY borrowerInfo.firstName ASC;");
  while ($row = mysqli_fetch_assoc($currentDate)) {
    if ($nowDate < $row['returnDate']) {
      $cardType = "border-success";
      $textType = "text-success";
      #echo 'success';
    }
    if ($nowDate > $row['returnDate'] && $nowDate < $row['defaultDate']) {
      $cardType = "border-warning";
      $textType = "text-warning";
      #echo 'warning';
    }
    if ($nowDate > $row['defaultDate']) {
      $cardType = "border-danger";
      $textType = "text-danger";
      #echo 'danger';
    }
    $allBorrowers .= '
    <div class="card '.$cardType.' col-lg-3" style="margin: 0rem;">
      <div class="card-body '.$textType.'">
        <a href="#" style="color: black;"><h5 class="card-title">'.$row['firstName'].' '.$row['secName'].' '.$row['thirdName'].'</h5></a>
        <p class="card-text"><b>Final date: '.$row['returnDate'].'<br>Loan amount Ksh. '.$row['loanAmount'].'</b><br></p>
        <a href="../pdfDownload/pdfForm.php?formNo='.$row['formNo'].'" target="_blank" class="btn btn-link">PDF</a>
      </div>
    </div><br>
    ';
  }
}
