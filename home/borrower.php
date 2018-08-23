<?php
$tableBorrowerSql = mysqli_query($conn, "SELECT * FROM borrowerInfo");
$tableBorrowerNumRows = mysqli_num_rows($tableBorrowerSql);
$tableBorrowerData = mysqli_fetch_assoc($tableBorrowerSql);
$count = 0;
$allBorrowers = '';
if ($tableBorrowerNumRows > 0) {
  while ($row = mysqli_fetch_assoc($tableBorrowerSql)) {
    $allBorrowers .= '
    <div class="card col-lg-4" style="margin: 0.0rem;">
      <img class="card-img-top" alt="image of the borrower">
      <div class="card-body">
        <h5 class="card-title">'.$row['firstName'].' '.$row['secName'].' '.$row['thirdName'].'</h5>
        <p class="card-text">Names form somewhere loan amount and return date. Together with the count down of this particular borrower.</p>
        <a href="#" class="btn btn-outline-dark">Open pdf</a>
      </div>
    </div><br>
    ';
  }
}
