<?php
if (isset($_GET['formNo'])) {
  $formNo = $_GET['formNo'];
} else {
  header("location: ../home/home.php");
}

$disabled = $spouseFirstName = $spouseSecName = $spouseThirdName = $spouseIdNo = $spousePhoneNo = '';

$borrowerInfo = mysqli_query($conn, "SELECT * FROM borrowerInfo WHERE formNo = '$formNo'");
$employerInfo = mysqli_query($conn, "SELECT * FROM employer WHERE formNo = '$formNo'");
$assets = mysqli_query($conn, "SELECT * FROM assets WHERE formNo = '$formNo'");
$guarantorInfo = mysqli_query($conn, "SELECT * FROM guarantorInfo WHERE formNo = '$formNo'");
$loans = mysqli_query($conn, "SELECT * FROM loans WHERE formNo = '$formNo'");
$spouseInfo = mysqli_query($conn, "SELECT * FROM spouseInfo WHERE formNo = '$formNo'");
$tableDates = mysqli_query($conn, "SELECT * FROM tableDates WHERE formNo = '$formNo'");

$borrowerInfoRows = mysqli_num_rows($borrowerInfo);
if ($borrowerInfoRows > 0) {
  #echo "yes";
  if ($row = mysqli_fetch_assoc($borrowerInfo)) {
    $firstName = $row['firstName'];
    $secName = $row['secName'];
    $thirdName = $row['thirdName'];
    $email = $row['email'];
    $phoneNo = $row['phoneNo'];
    $idNo = $row['idNo'];
    $estate = $row['estate'];
    $division = $row['division'];
    $subCounty = $row['subCounty'];
  }
  if ($row = mysqli_fetch_assoc($employerInfo)) {
    $employer = $row['employer'];
    $occupation = $row['occupation'];
  }
  if (mysqli_num_rows($spouseInfo) == null) {
    $disabled = "disabled";
  }
  if ($row = mysqli_fetch_assoc($spouseInfo)) {
    if (mysqli_num_rows($spouseInfo) != 0) {
      $spouseFirstName = $row['firstName'];
      $spouseSecName = $row['secName'];
      $spouseThirdName = $row['thirdName'];
      $spouseIdNo = $row['idNo'];
      $spousePhoneNo = $row['phoneNo'];
    }
  }

  if (mysqli_num_rows($guarantorInfo) > 0) {
    function guarantor($guarantorInfo) {
      $count = 1;
      while ($row = mysqli_fetch_assoc($guarantorInfo)) {
        $guarantor = '
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputCity"><b>Guarantor '.$count.': </b>First Name</label>
            <input type="text" name="gr'.$count.'firstName" class="form-control" id="inputCity" placeholder="'.$row['firstName'].'">
          </div>
          <div class="form-group col-md-4">
            <label for="inputCity">Second Name</label>
            <input type="text" name="gr'.$count.'SecName" class="form-control" id="inputCity" placeholder="'.$row['secName'].'">
          </div>
          <div class="form-group col-md-4">
            <label for="inputCity">Third Name</label>
            <input type="text" name="gr'.$count.'ThirdName" class="form-control" id="inputCity" placeholder="'.$row['thirdName'].'">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">ID Number</label>
            <input type="text" name="gr'.$count.'IdNo" class="form-control" id="inputCity" placeholder="'.$row['idNo'].'">
          </div>
          <div class="form-group col-md-6">
            <label for="inputCity">Phone Number</label>
            <input type="text" name="gr'.$count.'PhoneNo" class="form-control" id="inputCity" placeholder="'.$row['phoneNo'].'">
          </div>
        </div>
        ';$count++; echo $guarantor;
      }
    }
  }

  if (mysqli_num_rows($assets) > 0) {
    function assets($assets) {
      $count = 1;
      while ($row = mysqli_fetch_assoc($assets)) {
        $asset = '
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputCity"><b>Asset '.$count.':</b></label>
            <input type="text" name="asset'.$count.'" class="form-control" id="inputCity" placeholder="'.$row['asset'].'">
          </div>
          <div class="form-group col-md-4">
            <label for="inputCity">Buy Price</label>
            <input type="text" name="asset'.$count.'BuyPrice" class="form-control" id="inputCity" placeholder="'.$row['buyPrice'].'">
          </div>
          <div class="form-group col-md-4">
            <label for="inputCity">Selling Price</label>
            <input type="text" name="asset'.$count.'SellPrice" class="form-control" id="inputCity" placeholder="'.$row['sellPrice'].'">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Serial Number</label>
            <input type="text" name="asset'.$count.'SerialNo" class="form-control" id="inputCity" placeholder="'.$row['serialNo'].'">
          </div>
          <div class="form-group col-md-6">
            <label for="inputCity">Purchase Year</label>
            <input type="text" name="asset'.$count.'purchaseYear" class="form-control" id="inputCity" placeholder="'.$row['purchaseYear'].'">
          </div>
        </div>
        '; $count++; echo $asset;
      }
    }
  }
}
?>
