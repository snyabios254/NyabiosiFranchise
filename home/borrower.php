<?php
$formNo = '';
$tableBorrowerSql = mysqli_query($conn, "SELECT * FROM borrowerInfo");
$dateBorrower = mysqli_query($conn, "SELECT borrowerInfo.formNo, borrowerInfo.firstName, borrowerInfo.secName, borrowerInfo.thirdName, tableDates.returnDate FROM borrowerInfo LEFT JOIN tableDates ON borrowerInfo.formNo = tableDates.formNo;");
$tableBorrowerNumRows = mysqli_num_rows($tableBorrowerSql);
$tableBorrowerData = mysqli_fetch_assoc($tableBorrowerSql);
$count = 0;
$allBorrowers = '';
$formNoSql = mysqli_fetch_assoc($tableBorrowerSql);
$formNo = $formNoSql['formNo'];

function dataAdd($tableAssets) {
  $date = $tableAssets['date'];
  $finalDate = strtotime($date.' +30 days');
  $final = date("d-m-Y H:i:s", $finalDate);
  return $final;
}

if ($tableBorrowerNumRows > 0) {
  while ($row = mysqli_fetch_assoc($dateBorrower)) {
    

    $allBorrowers .= '
    <div class="card border-success col-lg-3" style="margin: 0rem;">
      <div class="card-body">
        <a href="#" style="color: black;"><h5 class="card-title">'.$row['firstName'].' '.$row['secName'].' '.$row['thirdName'].'</h5></a>
        <p class="card-text"><b>Return date: '.$row['returnDate'].'</b><br></p>
        <a href="../pdfDownload/pdfForm.php?formNo='.$row['formNo'].'" target="_blank" class="btn btn-link">PDF</a>
      </div>
    </div><br>
    ';
  }
}
