<?php
$formNo = $currentLoans = $overdueLoans = $defaultedLoans = $clearedLoans = '';
$tableBorrowerSql = mysqli_query($conn, "SELECT * FROM borrowerInfo");
$tableAssets = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM assets WHERE formNo = '$formNo'"));
$tableBorrowerNumRows = mysqli_num_rows($tableBorrowerSql);
$tableBorrowerData = mysqli_fetch_assoc($tableBorrowerSql);
$allBorrowers = '';
$currentDate = mysqli_query($conn, "SELECT borrowerInfo.idNo, borrowerInfo.firstName, borrowerInfo.secName, borrowerInfo.email, borrowerInfo.phoneNo, loans.loanAmount, borrowerInfo.estate, tableDates.returnDate, tableDates.defaultDate, tableDates.status FROM borrowerInfo INNER JOIN loans ON borrowerInfo.formNo = loans.formNo INNER JOIN tableDates ON borrowerInfo.formNo = tableDates.formNo ORDER BY borrowerInfo.firstName ASC;");
$nowDate = date("Y-m-d H:i:s");

if ($tableBorrowerNumRows > 0) {
  $count = 0;
  while ($row = mysqli_fetch_assoc($currentDate)) {
    if ($nowDate < $row['returnDate'] && $row['status'] == 'negative') {
      $currentLoans .= '
      <table class="table table-bordered table-responsive">
        <thead>
          <tr>
            <th scope="col">'.$count.'</th>
            <th scope="col">ID No.</th>
            <th scope="col">1st Name</th>
            <th scope="col">2nd Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Loan</th>
            <th scope="col">Estate</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"></th>
            <td>'.$row['idNo'].'</td>
            <td>'.$row['firstName'].'</td>
            <td>'.$row['secName'].'</td>
            <td>'.$row['email'].'</td>
            <td>07'.$row['phoneNo'].'</td>
            <td>Ksh. '.$row['loanAmount'].'</td>
            <td>'.$row['estate'].'</td>
          </tr>
        </tbody>
      </table>
      ';$count++;
    }
  #}
  #while ($row = mysqli_fetch_assoc($currentDate)) {
    if ($nowDate > $row['returnDate'] && $nowDate < $row['defaultDate'] && $row['status'] == 'negative') {
      $overdueLoans .= '
      <table class="table table-bordered table-responsive">
        <thead>
          <tr>
            <th scope="col">'.$count.'</th>
            <th scope="col">ID No.</th>
            <th scope="col">1st Name</th>
            <th scope="col">2nd Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Loan</th>
            <th scope="col">Estate</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"></th>
            <td>'.$row['idNo'].'</td>
            <td>'.$row['firstName'].'</td>
            <td>'.$row['secName'].'</td>
            <td>'.$row['email'].'</td>
            <td>07'.$row['phoneNo'].'</td>
            <td>Ksh. '.$row['loanAmount'].'</td>
            <td>'.$row['estate'].'</td>
          </tr>
        </tbody>
      </table>
      ';$count++;
    }
  #}
  #while ($row = mysqli_fetch_assoc($currentDate)) {
    if ($nowDate > $row['defaultDate'] && $row['status'] == 'negative') {
      $defaultedLoans .= '
      <table class="table table-bordered table-responsive">
        <thead>
          <tr>
            <th scope="col">'.$count.'</th>
            <th scope="col">ID No.</th>
            <th scope="col">1st Name</th>
            <th scope="col">2nd Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Loan</th>
            <th scope="col">Estate</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"></th>
            <td>'.$row['idNo'].'</td>
            <td>'.$row['firstName'].'</td>
            <td>'.$row['secName'].'</td>
            <td>'.$row['email'].'</td>
            <td>07'.$row['phoneNo'].'</td>
            <td>Ksh. '.$row['loanAmount'].'</td>
            <td>'.$row['estate'].'</td>
          </tr>
        </tbody>
      </table>
      ';$count++;
    }
  #}
  #while ($row = mysqli_fetch_assoc($currentDate)) {
    if ($row['status'] == 'positive') {
      $clearedLoans .= '
      <table class="table table-bordered table-responsive">
        <thead>
          <tr>
            <th scope="col">'.$count.'</th>
            <th scope="col">ID No.</th>
            <th scope="col">1st Name</th>
            <th scope="col">2nd Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Loan</th>
            <th scope="col">Estate</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"></th>
            <td>'.$row['idNo'].'</td>
            <td>'.$row['firstName'].'</td>
            <td>'.$row['secName'].'</td>
            <td>'.$row['email'].'</td>
            <td>07'.$row['phoneNo'].'</td>
            <td>Ksh. '.$row['loanAmount'].'</td>
            <td>'.$row['estate'].'</td>
          </tr>
        </tbody>
      </table>
      ';$count++;
    }
  }
}
